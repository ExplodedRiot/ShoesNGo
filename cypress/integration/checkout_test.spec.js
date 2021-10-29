describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
    })
    it('Login', () => {
        cy.get('#email').type('alifananda@gmail.com')
        cy.get('#password').type('12345687')
        cy.get('#login').click()

        cy.visit('http://127.0.0.1:8000/home')
        cy.get('#fa fa-shopping-cart').click()
    })
describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/check-out')
    })
})
})