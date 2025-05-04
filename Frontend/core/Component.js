export class Component extends HTMLElement {
    static shadow = false;

    static style = null;
    static stylePromise = null;

    static template = null;
    static templatePromise = null;

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
     * 
     * @param {*} styleRoute 
     * @returns 
     */
    static async loadStyle(styleRoute) {
        if (this.style) {
            return this.style;
        }

        if (this.stylePromise) {
            return this.stylePromise;
        }

        if (!styleRoute) {
            throw new Error('No se ha definido la propiedad "styleRoute".');
        }

        this.stylePromise = (async function () {
            try {
                const response = await fetch(styleRoute, { cache: 'no-store' });
                const content = await response.text();
            
                const styleElement = document.createElement('style');
                styleElement.textContent = content;
        
                return this.style = styleElement;
            } catch (error) {
                console.error('Error cargando el estilo del componente:', error.message);
    
                return document.createElement('style');
            }
        }).call(this);

        return this.stylePromise;
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

        if (this.templatePromise) {
            return this.templatePromise;
        }

        if (!templateRoute) {
            throw new Error('No se ha definido la propiedad "templateRoute".');
        }

        this.templatePromise = (async function () {
            try {
                const response = await fetch(templateRoute, { cache: 'no-store' });
                const content = await response.text();
    
                const parser = new DOMParser();
                const parsedDocument = parser.parseFromString(content, 'text/html');
            
                const templateElement = parsedDocument.querySelector('template');
    
                if (!templateElement) {
                    throw new Error(`"template" no encontrado en "${templateRoute}".`);
                }
        
                return this.template = templateElement;
            } catch (error) {
                console.error('Error cargando la plantilla del componente:', error.message);
    
                return document.createElement('template');
            }
        }).call(this);

        return this.templatePromise;
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
        const style = await this.constructor.loadStyle(this.constructor.styleRoute);

        const template = await this.constructor.loadTemplate(this.constructor.templateRoute);
        const templateContent = template.content.cloneNode(true);

        if (this.constructor.shadow) {
            this.shadowRoot.prepend(style);
            this.shadowRoot.appendChild(templateContent);
        } else {
            this.prepend(style);
            this.appendChild(templateContent);
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
            this[handler].call(this);
        } else {
            console.warn(`No se encontró el método "${handler}" para manejar el atributo "${attribute}".`);
        }
    }
}

export function extendElement(elementNameToExtend, elementName) {
    const elementToExtend = document.createElement(elementNameToExtend);

    elementToExtend.appendChild(elementName);

    return elementToExtend;
}

export function defineElement(elementName, componentClass) {
    Promise.all([componentClass.templatePromise, componentClass.stylePromise]).then(function () {
        if (!customElements.get(elementName)) {
            customElements.define(elementName, componentClass);
        }
    });
}
