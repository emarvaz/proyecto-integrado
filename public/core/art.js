const ATTRIBUTES = {
    OUTPUT: 'data-output'
};

if (!Element.prototype.outputSelector) {
    Element.prototype.outputSelector = function(content) {
        return this.querySelector(`[${ATTRIBUTES.OUTPUT}="${content}"]`);
    };
}

if (!Element.prototype.outputSelectorAll) {
    Element.prototype.outputSelectorAll = function(content) {
        return this.querySelectorAll(`[${ATTRIBUTES.OUTPUT}="${content}"]`);
    };
}

export class ArtElement extends HTMLElement {
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
        const styleRoute = this.constructor.styleRoute;

        let style = null;

        if (styleRoute) {
            style = await this.constructor.loadStyle(this.constructor.styleRoute);
        }

        const templateRoute = this.constructor.templateRoute;

        let template = null;
        let templateContent = '';

        if (templateRoute) {
            template = await this.constructor.loadTemplate(this.constructor.templateRoute);
            templateContent = template.content.cloneNode(true);
        }

        if (this.constructor.shadow) {
            if (style) {
                this.shadowRoot.prepend(style);
            }

            if (template) {
                this.shadowRoot.appendChild(templateContent);
            }
        } else {
            if (style) {
                this.prepend(style);
            }

            if (template) {
                this.appendChild(templateContent);
            }
        }

        const attributes = this.constructor.attributes;

        Object.keys(attributes).forEach(function (attributeName) {
            const attribute = attributes[attributeName];
            const attributePrefix = attribute.prefix;

            let validAttributeName = this.constructor.camelCaseToKebabCase(attributeName);

            if (attributePrefix) {
                validAttributeName = attributePrefix + validAttributeName;
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

    contextSelector(context, content) {
        const contextElement = this.querySelector(context);
        contextElement.textContent = content;
    }

    contextSelectorAll(context, content) {
        const contextElements = this.querySelectorAll(context);
        contextElements.forEach(function (element) {
            element.textContent = content;
        }.bind(this));
    }
}

export function defineElement(name, componentClass) {
    Promise.all([componentClass.templatePromise, componentClass.stylePromise]).then(function () {
        if (!customElements.get(name)) {
            customElements.define(name, componentClass);
        }
    });

    return customElements.whenDefined(name);
}
