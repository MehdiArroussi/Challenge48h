import { DateTime } from 'luxon'
import { BaseModel, column, HasMany, hasMany } from '@ioc:Adonis/Lucid/Orm'
import Produit from './Produit'
import User from './User'

export default class Shop extends BaseModel {
  @column({ isPrimary: true})
  public id_shop: number

  @column()
  public nom: string

  @hasMany(() => Produit)
  public produits: HasMany<typeof Produit>

  @hasMany(() => User)
  public users: HasMany<typeof User>
  // @column.dateTime({ autoCreate: true })
  // public createdAt: DateTime

  // @column.dateTime({ autoCreate: true, autoUpdate: true })
  // public updatedAt: DateTime
}
