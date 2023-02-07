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
import Database from '@ioc:Adonis/Lucid/Database'
import {ShopsController} from 'App/Controllers/Http/ShopsController'

Route.get('/t', async () => {
  return { Pierric: 'COME' }
})

Route.get('/shop/id', 'ShopsController.get')

Route.get('shop' ,async (ctx) => {
  return new ShopsController().shops(ctx)
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