// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Database from "@ioc:Adonis/Lucid/Database";
import Commande from "App/Models/Commande";


export default class CommandesController {
    public async get(id:number) {
        return Database.from('Commandes').select('*').where('idCommande', id)
    }

    public async commandes() {
        return Commande.all()
    }

    public async create(body:any) {
        const commande = new Commande()
        commande.date = body.requestBody.date
        commande.delivrer = body.requestBody.delivrer
        await commande.save()
    }

    public async remove(id:number) {
        const commande = await Commande.findOrFail(id)
        await commande.delete()
    }

    public async update(id:Number ,body:any) {
        const commande = await Commande.findOrFail(id)
        commande.date = body.requestBody.date
        commande.delivrer = body.requestBody.delivrer
        console.log(commande)
        await commande.save()
    }
}
