import BaseSchema from '@ioc:Adonis/Lucid/Schema'

export default class extends BaseSchema {
  protected tableName = 'commandes'

  public async up () {
    this.schema.createTable(this.tableName, (table) => {
      table.increments('id_commande')
      table.date('date')
      table.integer('id_user').unsigned().references('users.id_user').onDelete("CASCADE")
      table.integer('id_produit').unsigned().references('produits.id_produit').onDelete("CASCADE")
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
