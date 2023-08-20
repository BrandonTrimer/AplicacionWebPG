describe('Cargar la pagina principal', () => {
 
    it('Cargar la pagina principal', () => {
   
      cy.visit('/')
   
      cy.get('.navbar-brand')
   
        .should('exist')
      cy.get('a.btn.btn-outline-white.btn-circle').click()
   
    });
   
  });