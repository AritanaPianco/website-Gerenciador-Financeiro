<template>
    <div class="container mt-5">
           
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Transação</th>
                        <th scope="col">Método de Pagamento</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data da Transação</th>
                    </tr>
                </thead>

                <tbody>

                      
                    <tr v-for="(transacao,key) in transacoes" :key="key">
                        <th scope="row">{{ key }}</th>
                        <td>{{ transacao.categoria }}</td>
                        <td>{{ transacao.relacao.tipoTransacao.nome }}</td>
                        <td>{{ transacao.relacao.metodoPagamento.nome }}</td>
                        <td>{{ transacao.valor }}</td>
                        <td>{{ transacao.descricao }}</td>
                        <td>{{ transacao.data_transacao }}</td>
                    </tr>
                </tbody>
            </table>
        </div> 
       
    </div>
</template>



<script>
    export default {
        props: {
            transacoes: Array

        },
         data(){
             return{
                  data: {}       
             }
         }, 
        mounted() {
            // this.data = this.transacoes 
            console.log(this.transacoes)
        }
    }
</script>