/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| This file is dedicated for defining HTTP routes. A single file is enough
| for majority of projects, however you can define routes in different
| files and just make sure to import them inside this file. For example
|
| Define routes in following two files
| ├── start/routes/cart.ts
| ├── start/routes/customer.ts
|
| and then import them inside `start/routes.ts` as follows
|
| import './routes/cart'
| import './routes/customer'
|
*/

import { Request } from '@adonisjs/core/build/standalone'
import Route from '@ioc:Adonis/Core/Route'
import CommandesController from 'App/Controllers/Http/CommandesController'
import ProduitsController from 'App/Controllers/Http/ProduitsController'
import {ShopsController} from 'App/Controllers/Http/ShopsController'
import UsersController from 'App/Controllers/Http/UsersController'

Route.get('/t', async () => {
  return { Pierric: 'COME' }
})

Route.get('/shop/:id', async ({request}) => {
  return new ShopsController().get(request.param('id'))
})

Route.get('shop' ,async () => {
  return new ShopsController().shops()
})

Route.put('/shop/:id',async ({request}) => {
  return new ShopsController().update(request.param('id'), request)
})

Route.delete('/shop/:id', async ({request}) => {
  return new ShopsController().remove(request.param('id'))
})

Route.post('/shop',async ({request}) => {
  return new ShopsController().create(request)
  
})

// parti produit

Route.get('/produit/:id', async ({request}) => {
  return new ProduitsController().get(request.param('id'))
})

Route.get('produits' ,async () => {
  return new ProduitsController().produits()
})

Route.put('/produit/:id',async ({request}) => {
  return new ProduitsController().update(request.param('id'), request)
})

Route.delete('/produit/:id', async ({request}) => {
  return new ProduitsController().remove(request.param('id'))
})

Route.post('/produit',async ({request}) => {
  return new ProduitsController().create(request)
  
})


// partie route commande

Route.get('/commande/:id', async ({request}) => {
  return new CommandesController().get(request.param('id'))
})

Route.get('commande' ,async () => {
  return new CommandesController().commandes()
})

Route.put('/commande/:id',async ({request}) => {
  return new CommandesController().update(request.param('id'), request)
})

Route.delete('/commande/:id', async ({request}) => {
  return new CommandesController().remove(request.param('id'))
})

Route.post('/commande',async ({request}) => {
  return new CommandesController().create(request)
})

// parti route user

Route.put('/user/:id',async ({request}) => {
  return new UsersController().update(request.param('id'), request)
})

Route.delete('/user/:id', async ({request}) => {
  return new UsersController().remove(request.param('id'))
})

Route.post('/user',async ({request}) => {
  return new UsersController().create(request)
})

// Route.get('/user/:id', async ({request}) => {
//   return Database.from('user').select('email').where('idUser', request.param('id'))
// })

// Route.get('/produit/:type', async ({request}) => {
//   return Database.from('produit').select('*').where('type', request.param('type'))
// })

// Route.get('/fullProduct', async () => {
//   return Database.from('produit').select('*')
// })

// Route.get('/shop/:id', async({request}) => {
//   return ShopsController.get(request.param('id'))
// })