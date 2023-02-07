// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

import Database from "@ioc:Adonis/Lucid/Database";
import Shop from "App/Models/Shop";
import User from "App/Models/User";


export class ShopsController {
    public async get(id:number) {
        return Database.from('shop').select('*').where('idShop', id)
    }

    public async shops() {
        return Shop.all()
    }

    public async create(body:any) {
        const shop = new Shop()
        shop.nom = body.requestBody.nom
        await shop.save()
    }

    public async remove(id:number) {
        const shop = await Shop.findOrFail(id)
        await shop.delete()
    }

    public async update(id:Number ,body:any) {
        const shop = await Shop.findOrFail(id)
        shop.nom = body.requestBody.nom
        console.log(shop)
        await shop.save()
    }
}

