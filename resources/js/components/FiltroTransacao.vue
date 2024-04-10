<template>

<div class="container">
    <div class="row">
       
     <form :action="rota" class="d-flex mb-5">    
            
        <input type="hidden" name="_token" :value="csrfToken">
    
        <select name="metodo_pagamento_id" class="mr-2 rounded"> 
            <option value="" selected disabled>método de pagamento</option>
            <option v-for="metodopagamento in metodosPagamento" :key="metodopagamento.id" :value="metodopagamento.id">
                {{ metodopagamento.nome }}
            </option> 
        </select>
        
        <select name="transacao_id" class="mr-2 rounded">
            <option value="" selected disabled>tipo de transação</option>
            <option  v-for="tipotransacao in tiposTransacao" :key="tipotransacao.id" :value="tipotransacao.id">
                {{ tipotransacao.nome }}
            </option>  
        </select>
        
        <!-- <money  v-bind="money" type="text" class="form-control" id="ValorInput" name="valor"></money> -->        
        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        
    </form>
    </div>
</div>

</template>

<script>
    export default {
        props: [ 
            'rota',
            'csrfToken'
         ],
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