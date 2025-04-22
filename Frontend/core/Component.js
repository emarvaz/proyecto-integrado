export default class Component extends HTMLElement {
    static shadow = false;
    static template = null;
    static templateCache = null;
    static attributes = {};

    static get templatePromise() {
        if (!this.templateCache) {
            this.templateCache = this.loadTemplate(this.templateRoute);
        }

        return this.templateCache;
    }

    /**
     * Observa los atributos definidos en el componente y llama al método
     * attributeChangedCallback cuando cambian.
     * Método estandar proporcionado por la API de Web Components.
     */
    static get observedAttributes() {
        return Object.keys(this.attributes);
    }

    /**
     * Comprueba si el componente tiene un template definido y lo carga si no lo
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
            const url = new URL(templateRoute, import.meta.url);
            const response = await fetch(url);
            const content = await response.text();

            const parser = new DOMParser();
            const parsedDocument = parser.parseFromString(content, 'text/html');
        
            const template = parsedDocument.querySelector('template');

            if (!template) {
                throw new Error(`Elemento <template> no encontrado en "${templateRoute}".`);
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

    async connectedCallback() {
        const template = await this.constructor.loadTemplate(this.constructor.templateRoute);
        const content = template.content.cloneNode(true);

        if (this.constructor.shadow) {
            this.shadowRoot.appendChild(content);
        } else {
            this.appendChild(content);
        }

        this.applyAttributeValues();
        this.callAttributeHandlers();
    }

    /**
     * Se llama automaticamente cuando cambia el valor de un atributo observado.
     * Es un estandar proporcionado por la API de Web Components.
     * 
     * @param {*} name
     * @param {*} oldValue
     * @param {*} newValue
     */
    attributeChangedCallback(name, oldValue, newValue) {
        if (oldValue === newValue) {
            return;
        }
    
        this.handleAttribute(name);

        if (newValue === null) {
            console.log(`El atributo "${name}" ha sido eliminado.`);
        } else if (oldValue === null) {
            console.log(`El atributo "${name}" ha sido añadido con el valor "${newValue}".`);
        } else {
            console.log(`El atributo "${name}" cambió de "${oldValue}" a "${newValue}".`);
        }
    }

    defineAttributesAccessors() {
        const attributes = this.constructor.attributes;

        if (!attributes) {
            return;
        }

        Object.keys(attributes).forEach(function (attribute) {
            Object.defineProperty(this, attribute, {
                get() {
                    return this.getAttribute(attribute);
                },
                set(value) {
                    if (value !== null) {
                        this.setAttribute(attribute, value);

                        return;
                    }

                    this.removeAttribute(attribute);
                },
                enumerable: true,
                configurable: true
            });
        }.bind(this));
    }

    applyAttributeValues() {
        const attributes = this.constructor.attributes;

        for (const attribute in attributes) {
            const definition = attributes[attribute];

            if (!this.hasAttribute(attribute) && definition.default !== undefined) {
                this[attribute] = definition.default;
            }
        }
    }

    callAttributeHandlers() {
        const attributes = this.constructor.attributes;

        for (const attribute in attributes) {
            this.handleAttribute(attribute);
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

        if (typeof this[handler] !== 'function') {
            console.warn(`No se encontró el método "${handler}" para manejar el atributo "${attribute}".`);

            return;
        }

        this[handler]();
    }
}
