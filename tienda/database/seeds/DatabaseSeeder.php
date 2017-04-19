<?php

use Illuminate\Database\Seeder;
use App\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
		self::seedProducto();
		$this->command->info('Tabla producto inicializada con datos!');
	}
	
	public function seedProducto(){
		DB::table('productos')->delete();
		foreach( $this->arrayProductos as $produ ) {
			$p = new Producto;
			$p->nombre = $produ['nombre'];
			$p->categoria = $produ['categoria'];
			$p->precio = $produ['precio'];
			$p->cantidad = $produ['cantidad'];
			$p->imagen = $produ['imagen'];
			$p->rented = $produ['rented'];
			$p->resumen = $produ['resumen'];
			$p->save();
		}
	}
	
	private $arrayProductos = array(
		array(
			'nombre' => 'Yogur desnatado fresa',
			'categoria' => 'Póstres',
			'precio' => '0.98', 
			'cantidad' => '90', 
			'imagen' => 'https://cuantoazucar.com/sites/default/files/fichas/card/87/g023487.png', 
			'rented' => false, 
			'resumen' => 'Yogur desnatado 0% con trozos de fresa y cereza Sveltesse Duo Nestlé.'
		),
		array(
			'nombre' => 'Ensalada César',
			'categoria' => 'Alimentación',
			'precio' => '2.89', 
			'cantidad' => '55', 
			'imagen' => 'http://www.florette.es/wp-content/uploads/2014/09/3D-B-Cesar-011.png', 
			'rented' => true, 
			'resumen' => 'FLORETTE ensalada César con pollo & queso (contiene tenedor + salsa César) tarrina 200 g.'
		),
		array(
			'nombre' => 'Batido de chocolate',
			'categoria' => 'Póstres',
			'precio' => '1.30', 
			'cantidad' => '89', 
			'imagen' => 'https://images-na.ssl-images-amazon.com/images/I/71gRM94Ay2L._SY445_.jpg', 
			'rented' => false, 
			'resumen' => 'Puleva - Batido Chocolate, Botella 750 ml.'
		),
		array(
			'nombre' => 'Batido de fresa',
			'categoria' => 'Póstres',
			'precio' => '1.26', 
			'cantidad' => '66', 
			'imagen' => 'http://www.lactalisprofesional.com/FotosProductos/619/60365_p.jpg', 
			'rented' => true, 
			'resumen' => 'Batidos Fresa 200ML Botella Cristal Puleva  Puleva.'
		),
		array(
			'nombre' => 'Yogur azucarado',
			'categoria' => 'Póstres',
			'precio' => '1.20', 
			'cantidad' => '50', 
			'imagen' => 'https://www.agustoconlavida.es/imgdb/product/yogur-natural-azucarado-la-lechera/1782', 
			'rented' => false, 
			'resumen' => 'Yogur Natural Azucarado La Lechera.'
		),
		array(
			'nombre' => 'Kétchup',
			'categoria' => 'Alimentación',
			'precio' => '2.25', 
			'cantidad' => '70', 
			'imagen' => 'https://img.clipartfox.com/b5f22a1332352347bb52b984bd48ef31_pics-photos-food-ketchup-clipart-ketchup_1525-3000.png', 
			'rented' => false, 
			'resumen' => 'Ketchup heinz 700 gr.'
		),
		array(
			'nombre' => 'Allioli',
			'categoria' => 'Alimentación',
			'precio' => '0.70', 
			'cantidad' => '90', 
			'imagen' => 'http://i50.tinypic.com/m9u4np.jpg', 
			'rented' => true, 
			'resumen' => 'Allioli chovi clásico 200 ml.'
		),
		array(
			'nombre' => 'Galletas',
			'categoria' => 'Alimentación',
			'precio' => '0.78', 
			'cantidad' => '30', 
			'imagen' => 'https://www.degustabox.com/es/public/images/1409053943_fontaneda.png', 
			'rented' => true, 
			'resumen' => 'Galletas Fontaneda Difestive.'
		),
		array(
			'nombre' => 'Leche desnatada UTH',
			'categoria' => 'Alimentación',
			'precio' => '3.20', 
			'cantidad' => '70', 
			'imagen' => 'http://precioahorro.com/513-large_default/leche-desnatada-pascual-1l.jpg', 
			'rented' => false, 
			'resumen' => 'Leche Desnatada Pascual.'
		),
		array(
			'nombre' => 'Queso semicurado',
			'categoria' => 'Alimentación',
			'precio' => '6.50', 
			'cantidad' => '90', 
			'imagen' => 'http://www.interempresas.net/FotosArtProductos/P71950.jpg', 
			'rented' => false, 
			'resumen' => 'Queso semicurado Valle de San Juan.'
		),
		array(
			'nombre' => 'Salsa Barbacoa',
			'categoria' => 'Alimentación',
			'precio' => '0.88', 
			'cantidad' => '40', 
			'imagen' => 'http://www.chovi.com/wp-content/uploads/2015/05/chovi-linea-classic-bbq.jpg', 
			'rented' => false, 
			'resumen' => 'Salsa Barbacoa 200 ml Chovi.'
		),
		array(
			'nombre' => 'Lata de coca cola',
			'categoria' => 'Bebidas',
			'precio' => '1.98', 
			'cantidad' => '99', 
			'imagen' => 'http://platea.pntic.mec.es/~mmotta/web11kh/Cocacola/cocacola.jpg', 
			'rented' => true, 
			'resumen' => 'Lata 33 cl Coca Cola.'
		),
		array(
			'nombre' => 'Botella zumo Naranja',
			'categoria' => 'Bebidas',
			'precio' => '1.40', 
			'cantidad' => '99', 
			'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/TriNa_vidrio_naranja_27,5_cl.png/220px-TriNa_vidrio_naranja_27,5_cl.png', 
			'rented' => false, 
			'resumen' => 'Botella 1.5l Trina Naranja sin burbujas.'
		),
		array(
			'nombre' => 'Lata de refresco tropical',
			'categoria' => 'Bebidas',
			'precio' => '0.78', 
			'cantidad' => '67', 
			'imagen' => 'http://www.bolosdacorte.com.br/app/fotos/2caae4b7f437eccec7db727975a9425b.jpg', 
			'rented' => true, 
			'resumen' => 'Lata 33cl Guaraná.'
		)



	);
	
	
	
	
	
}
