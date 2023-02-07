import { DateTime } from 'luxon'
import { BaseModel, column } from '@ioc:Adonis/Lucid/Orm'

export default class Produit extends BaseModel {
  @column({ isPrimary: true })
  public id_produit: number

  @column()
  public name: string

  @column()
  public prix: number

  @column()
  public quantite: number

  @column()
  public type: string

  // @column.dateTime({ autoCreate: true })
  // public createdAt: DateTime

  // @column.dateTime({ autoCreate: true, autoUpdate: true })
  // public updatedAt: DateTime
}
