// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Database from "@ioc:Adonis/Lucid/Database";
import User from "App/Models/User";

export default class UsersController {
    // public async get(id:number) {
    //     return Database.from('users').select('*').where('idUser', id)
    // }

    // public async produits() {
    //     return User.all()
    // }

    public async create(body:any) {
        const user = new User()
        user.name = body.requestBody.name
        user.email = body.requestBody.email
        user.password = body.requestBody.password
        user.status = body.requestBody.status
        await user.save()
    }

    public async remove(id:number) {
        const user = await User.findOrFail(id)
        await user.delete()
    }

    public async update(id:Number ,body:any) {
        const user = await User.findOrFail(id)
        user.name = body.requestBody.name
        user.email = body.requestBody.email
        user.password = body.requestBody.password
        user.status = body.requestBody.status
        await user.save()
    }
}
