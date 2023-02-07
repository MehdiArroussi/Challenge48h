import { DateTime } from 'luxon'
import { BaseModel, column, HasMany, hasMany } from '@ioc:Adonis/Lucid/Orm'
import Produit from './Produit'

export default class Shop extends BaseModel {
  @column({ isPrimary: true })
  public idShop: number

  @column()
  public idUser: number

  @column()
  public idProduit: number

  @column()
  public nom: string

  @hasMany(() => Produit)
  public produits: HasMany<typeof Produit>
  // @column.dateTime({ autoCreate: true })
  // public createdAt: DateTime

  // @column.dateTime({ autoCreate: true, autoUpdate: true })
  // public updatedAt: DateTime
}
