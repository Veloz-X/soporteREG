export default class ErrorManager {
    constructor() {
      this.errors = {};
    }
  
    get(field) {
      if (this.errors[field]) {
        return this.errors[field][0];
      }
    }
  
    has(field) {
      return this.errors.hasOwnProperty(field);
    }
  
    any() {
      return Object.keys(this.errors).length > 0;
    }
  
    record(errors) {
      this.errors = errors;
    }

    add(key, value) {
      this.errors[key] = value;
    }
  
    clear(field) {
      delete this.errors[field];
    }

    clearAll(){
      this.errors = {};
    }
  }