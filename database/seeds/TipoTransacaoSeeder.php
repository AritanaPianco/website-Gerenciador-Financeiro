<?php

use Illuminate\Database\Seeder;
use App\TipoTransacao;

class TipoTransacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoTransacao::create(['nome' => 'Venda', 'descricao' => 'Exemplo de transação ao qual o usuário autenticado realiza uma venda']);
        TipoTransacao::create(['nome' => 'Compra', 'descricao' => 'Exemplo de transação ao qual o usuário autenticado realiza uma compra']);
        TipoTransacao::create(['nome' => 'Recebimento', 'descricao' => 'Exemplo de transação ao qual o usuário autenticado recebe um pagamento']);
        TipoTransacao::create(['nome' => 'Pagamento', 'descricao' => 'Exemplo de transação ao qual o usuário autenticado realiza um pagamento']);
    }
}
