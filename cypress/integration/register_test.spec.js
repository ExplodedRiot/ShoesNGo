describe('Register', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/register')
        cy.get('#register').click()
    })
    it('Register', () => {
        cy.get('#name').type('aliveananda')
        cy.get('#email').type('alifananda2@gmail.com')
        cy.get('#password').type('12345687')
        cy.get('#password-confirm').type('12345687')
        cy.get('#register').click()
    })
describe('Register', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/register')
    })
})
})