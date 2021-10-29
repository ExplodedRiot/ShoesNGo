describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })
    it('Home', () => {
        cy.get('#email').type('alifananda@gmail.com')
        cy.get('#password').type('12345687')
        cy.get('#login').click()

        cy.visit('http://127.0.0.1:8000/home')
        cy.get('#history').click()
    })
describe('history', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/history')
    })
})
})