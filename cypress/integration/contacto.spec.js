/// <reference types="cypress" />

describe('Prueba el formulario de contacto', () => {
    it('Prueba la página de contacto y el envio de emails', () => {
        cy.visit('/contacto');

        cy.get('[data-cy="heading-contacto"]').should('exist');
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('equal', 'Contacto');
        cy.get('[data-cy="heading-contacto"]').invoke('text').should('not.equal', 'Formulario de contacto');

        cy.get('[data-cy="heading-formulario"]').should('exist');
        cy.get('[data-cy="heading-formulario"]').invoke('text').should('equal', 'Llene el formulario de Contacto');
        cy.get('[data-cy="heading-formulario"]').invoke('text').should('not.equal', 'Llene el formulario');
        
    });

    it('Llena los campos del formulario', () => {
        cy.get('[data-cy="input-nombre').type('Omar');
        cy.get('[data-cy="input-mensaje').type('Deseo vender una casa');
        cy.get('[data-cy="input-opciones').type('Vende');
        cy.get('[data-cy="input-precio').type('1500000');
        cy.get('[data-cy="forma-contacto').eq(1).check();

        cy.wait(3000);

        cy.get('[data-cy="forma-contacto').eq(0).check();
        cy.get('[data-cy="input-telefono').type('1234567890');
        cy.get('[data-cy="input-fecha').type('2022-01-21');
        cy.get('[data-cy="input-hora').type('12:30');
    });
});