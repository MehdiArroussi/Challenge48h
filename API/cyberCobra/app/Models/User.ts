import { DateTime } from 'luxon'
import { BaseModel, column } from '@ioc:Adonis/Lucid/Orm'

export default class User extends BaseModel {
  @column({ isPrimary: true })
  public idUser: number

  @column()
  public name: string

  @column()
  public email: string

  @column()
  public password: string

  @column()
  public status: string
  // @column.dateTime({ autoCreate: true })
  // public createdAt: DateTime

  // @column.dateTime({ autoCreate: true, autoUpdate: true })
  //public updatedAt: DateTime
}
