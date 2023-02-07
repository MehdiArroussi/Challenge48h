import BaseSchema from '@ioc:Adonis/Lucid/Schema'

export default class extends BaseSchema {
  protected tableName = 'commandes'

  public async up () {
    this.schema.createTable(this.tableName, (table) => {
      table.increments('idCommande')
      table.date('date')
      table.integer('idUser').unsigned().references('users.idUser').onDelete("CASCADE")
      table.integer('idProduit').unsigned().references('produits.idProduit').onDelete("CASCADE")
      table.string('delivrer')

      /**
       * Uses timestamptz for PostgreSQL and DATETIME2 for MSSQL
       */
      // table.timestamp('created_at', { useTz: true })
      // table.timestamp('updated_at', { useTz: true })
    })
  }

  public async down () {
    this.schema.dropTable(this.tableName)
  }
}
