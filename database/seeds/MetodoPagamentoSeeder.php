<?php

use Illuminate\Database\Seeder;
use App\MetodoPagamento;

class MetodoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetodoPagamento::create(['nome' => 'Espécie', 'descricao' => 'dinheiro vivo é uma das transações mais simples']);  
        MetodoPagamento::create(['nome' => 'Cartão', 'descricao' => 'Cartões de crédito e débito permitem compras rápidas e seguras em lojas físicas e online.']);  
        MetodoPagamento::create(['nome' => 'Pix', 'descricao' => 'Forma de pagamento online via dispositivo mobile']);  
        MetodoPagamento::create(['nome' => 'Boleto', 'descricao' => 'Utilizados para pagamentos de contas, boletos bancários são emitidos por empresas e instituições.']);  
    }
}
