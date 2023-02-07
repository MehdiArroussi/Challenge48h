// import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Database from "@ioc:Adonis/Lucid/Database";
import Produit from "App/Models/Produit";



export default class ProduitsController {
    public async get(id:number) {
        return Database.from('Produits').select('*').where('idProduit', id)
    }

    public async produits() {
        return Produit.all()
    }

    public async create(body:any) {
        const produit = new Produit()
        produit.name = body.requestBody.name
        produit.prix = body.requestBody.prix
        produit.quantite = body.requestBody.quantite
        produit.type = body.requestBody.type
        await produit.save()
    }

    public async remove(id:number) {
        const produit = await Produit.findOrFail(id)
        await produit.delete()
    }

    public async update(id:Number ,body:any) {
        const produit = await Produit.findOrFail(id)
        produit.name = body.requestBody.name
        produit.prix = body.requestBody.prix
        produit.quantite = body.requestBody.quantite
        produit.type = body.requestBody.type
        console.log(produit)
        await produit.save()
    }
}
