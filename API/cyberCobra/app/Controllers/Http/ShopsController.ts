// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'

import Database from "@ioc:Adonis/Lucid/Database";
import Shop from "App/Models/Shop";

export class ShopsController {
    get(id:number) {
        return Database.from('shop').select('*').where('idShop', id)
    }

    getAll() {
        return Database.from('shop').select('*')
    }

    create(body:any) {
        const shop = new Shop()
    }
}
