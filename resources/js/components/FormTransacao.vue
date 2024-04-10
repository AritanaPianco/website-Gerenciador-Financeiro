<template>
     
    <div class="container">
       <div class="row">
            <div class="col">
              
                <form method="POST" :action="rota" class="mt-5">
                    
                    <input type="hidden" name="_token" :value="csrfToken">
                    
                      <div class="mb-4">
                           <label for="CategoriaInput" class="text-uppercase form-label">Categoria</label>
                           <input type="text" class="form-control" id="CategoriaInput" name="categoria" >
                       </div>


                       <div class="mb-4 d-flex flex-column">
                           <label for="metodo_pagamento_id" class="text-uppercase">Metodo de Pagamento</label>
                           <select name="metodo_pagamento_id" class="form-select">
                                <option  v-for="metodopagamento in metodosPagamento" :key="metodopagamento.id" :value="metodopagamento.id">
                                    {{ metodopagamento.nome }}
                                </option>           
                            </select>
                        </div>

                        <div class="mb-4 d-flex flex-column">
                           <label for="transacao_id" class="text-uppercase">Tipo de transação</label>
                           <select name="transacao_id" class="form-select">
                                <option  v-for="tipotransacao in tiposTransacao" :key="tipotransacao.id" :value="tipotransacao.id">
                                     {{ tipotransacao.nome }}
                                </option>           
                            </select>
                        </div>
                       
                    
                       <div class="mb-4">
                           <label for="ValorInput" class="text-uppercase form-label">Valor</label>
                           <money  v-bind="money" type="text" class="form-control" id="ValorInput" name="valor"></money>
                       </div>


                       <div class="mb-4">    
                           <label for="exampleFormControlTextarea1" class="text-uppercase form-label">Descrição</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="3"></textarea>
                       </div>

                       <div class="mb-4">
                           <label for="DataInput" class="text-uppercase form-label">Data da transação</label>
                           <input v-mask="'##/##/####'" type="text" class="form-control" id="DataInput" name="data_transacao" placeholder="dd/mm/aaaa">
                       </div>

                              
                       <button type="submit" class="btn btn-primary w-100">Cadastrar Transação</button>
                   </form>
               </div>  
        </div>
                                 
      </div>

</template>


<script>
    
export default {
    data(){
       return{
        money: {
          decimal: '.',
          thousands: '.',
        //   prefix: 'R$ ',
        //   suffix: ' #',
           precision: 2,
           masked: false
        },
        metodosPagamento: [],       
        tiposTransacao: []       
        
       }
    },
    props: [
       'rota',
       'csrfToken',
       'metodoPagamento'
    ],
    methods: {
        // loadingMetodosPagamento(){   
        // }   

    },
    mounted(){
        axios.get('/api/tipoTransacoes')
           .then(response => {
                 this.tiposTransacao = response.data;   
           })
           
        axios.get('/api/metodosPagamento')
          .then(response => {
               this.metodosPagamento = response.data;
          })   
    }

}
</script>