export class Component extends HTMLElement {
    static shadow = false;
    static template = null;
    static attributes = {};

    /**
     * 
     * @param {*} name 
     * @returns 
     */
    static camelCaseToKebabCase(name) {
        return name.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
    }

    /**
     * 
     * @param {*} attributeWithPrefix 
     * @returns
     */
    static getAttributeWithoutPrefix(attributeWithPrefix) {
        const attributes = this.attributes;
        
        for (const attributeName in attributes) {
            const attribute = attributes[attributeName];
            const attributePrefix = attribute.prefix || '';

            let validAttributeName = this.camelCaseToKebabCase(attributeName);

            const attributeNameWithPrefix = attributePrefix + validAttributeName;

            if (attributeWithPrefix === attributeNameWithPrefix) {
                return attributeName;
            }
        }
    }

    static get templatePromise() {
        return this.loadTemplate(this.templateRoute);
    }

    /**
     * Método proporcionado por la API de Web Components.
     * 
     * Observa los atributos definidos en el componente y llama al método
     * attributeChangedCallback cuando cambian.
     */
    static get observedAttributes() {
        return Object.keys(this.attributes).map(function (attributeName) {
            const attribute = this.attributes[attributeName];
            const attributePrefix = attribute.prefix;

            let validAttributeName = this.camelCaseToKebabCase(attributeName);

            if (attributePrefix) {
                validAttributeName = attributePrefix + validAttributeName;
            }
            
            return validAttributeName;
        }.bind(this));
    }

    /**
     * Comprueba si el componente tiene un template definido, y lo carga si no lo
     * tiene.
     * 
     * @param {*} templateRoute
     * @returns
     */
    static async loadTemplate(templateRoute) {
        if (this.template) {
            return this.template;
        }

        try {
            const response = await fetch(templateRoute);
            const content = await response.text();

            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(content, 'text/html');
        
            const template = parsedDocument.querySelector('template');

            if (!template) {
                throw new Error(`Elemento <template> no encontrado en '${templateRoute}'.`);
            }
    
            return this.template = template;
        } catch (error) {
            console.error(error);

            return document.createElement('template');
        }
    }

    constructor() {
        super();

        if (this.constructor.shadow) {
            this.attachShadow({ mode: 'open' });
        }

        this.defineAttributesAccessors();
    }

    /**
     * Método proporcionado por la API de Web Components.
     * 
     * Se llama automaticamente cuando se añade el componente al DOM.
     */
    async connectedCallback() {
        const template = await this.constructor.loadTemplate(this.constructor.templateRoute);
        const content = template.content.cloneNode(true);

        if (this.constructor.shadow) {
            this.shadowRoot.appendChild(content);
        } else {
            this.appendChild(content);
        }

        this.callAttributeHandlers();

        const attributes = this.constructor.attributes;

        Object.keys(attributes).forEach(function (attributeName) {
            const attribute = attributes[attributeName];
            const attributePrefix = attribute.prefix;

            let validAttributeName = this.constructor.camelCaseToKebabCase(attributeName);

            if (attributePrefix) {
                validAttributeName = attributePrefix + validAttributeName;
            }

            if (this.hasAttribute(validAttributeName)) {
                this.handleAttribute(attributeName);
            }
        }.bind(this));
    }

    /**
     * Método proporcionado por la API de Web Components.
     * 
     * Se llama automaticamente cuando cambia el valor de un atributo observado.
     * 
     * @param {*} attributeName
     * @param {*} oldValue
     * @param {*} newValue
     */
    attributeChangedCallback(attributeName, oldValue, newValue) {
        if (oldValue === newValue) {
            return;
        }
        
        let validAttributeName = this.constructor.getAttributeWithoutPrefix(attributeName);

        this.handleAttribute(validAttributeName);

        if (newValue === null) {
            console.log(`El atributo "${attributeName}" ha sido eliminado.`);
        } else if (oldValue === null) {
            console.log(`El atributo "${attributeName}" ha sido añadido con el valor "${newValue}".`);
        } else {
            console.log(`El atributo "${attributeName}" cambió de "${oldValue}" a "${newValue}".`);
        }
    }

    defineAttributesAccessors() {
        const attributes = this.constructor.attributes;
        
        if (!attributes) {
            return;
        }

        Object.keys(attributes).forEach(function (attributeName) {
            const attribute = attributes[attributeName];
            const attributeType = attribute.type;
            const attributePrefix = attribute.prefix;

            let validAttributeName = this.constructor.camelCaseToKebabCase(attributeName);

            if (attributePrefix) {
                validAttributeName = attributePrefix + validAttributeName;
            }

            Object.defineProperty(this, attributeName, {
                get() {
                    if (attributeType === Boolean) {
                        return this.hasAttribute(validAttributeName);
                    }

                    return this.getAttribute(validAttributeName);
                },
                set(value) {
                    // Si el valor que intentamos asignar es null o undefined,
                    // eliminamos el atributo.
                    if (value === null || value === undefined) {
                        if (this.hasAttribute(validAttributeName)) {
                            this.removeAttribute(validAttributeName);
                        }
                    }
                    // Si el atributo es de tipo Boolean, se añade o elimina
                    // dependiendo de su valor.
                    else if (attributeType === Boolean) {
                        if (Boolean(value)) {
                            if (!this.hasAttribute(validAttributeName)) {
                                this.setAttribute(validAttributeName, '');
                            }
                        } else {
                            if (this.hasAttribute(validAttributeName)) {
                                this.removeAttribute(validAttributeName);
                            }
                        }
                    } else {
                        const stringValue = String(value);

                        if(this.getAttribute(validAttributeName) !== stringValue) {
                            this.setAttribute(validAttributeName, stringValue);
                        }
                    }
                },
                enumerable: true,
                configurable: true
            });
        }.bind(this));
    }

    callAttributeHandlers() {
        const attributes = this.constructor.attributes;

        for (const attributeName in attributes) {
            this.handleAttribute(attributeName);
        }
    }

    /**
     * Ejecuta el método correspondiente para el manejo de cada atributo, así
     * evitamos tener que llamar a los métodos individualmente.
     * 
     * @param {*} attribute
     */
    handleAttribute(attribute) {
        const handler = `handle${attribute.charAt(0).toUpperCase() + attribute.slice(1)}`;

        if (typeof this[handler] === 'function') {
            this[handler]();
        } else {
            console.warn(`No se encontró el método "${handler}" para manejar el atributo "${attribute}".`);
        }
    }
}

export function define(elementName, componentClass) {
    componentClass.templatePromise.then(function () {
        if (!customElements.get(elementName)) {
            customElements.define(elementName, componentClass);
        }
    });
}
