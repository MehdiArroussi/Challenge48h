import { DateTime } from 'luxon'
import { BaseModel, column, HasMany, hasMany } from '@ioc:Adonis/Lucid/Orm'
import Produit from './Produit'
import User from './User'

export default class Commande extends BaseModel {
  @column({ isPrimary: true })
  public id_commande: number

  @column()
  public date: Date

  @column()
  public idUser: number

  @column()
  public idProduit: number

  @column()
  public delivrer: string

  @hasMany(() => Produit)
  public produits: HasMany<typeof Produit>

  @hasMany(() => User)
  public users: HasMany<typeof User>
  // @column.dateTime({ autoCreate: true })
  // public createdAt: DateTime

  // @column.dateTime({ autoCreate: true, autoUpdate: true })
  // public updatedAt: DateTime
}
