describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })
    it('Login', () => {
        cy.get('#email').type('alifananda@gmail.com')
        cy.get('#password').type('12345687')
        cy.get('#submit').click()
    })
describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })
})
})