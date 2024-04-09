<template>
     
     <!-- <div class="container"> -->
        <div class="row w-75">
             <div class="col">
                 <form method="POST" :action="rota" class="mt-5">
 
                    <input type="hidden" name="_token" :value="csrfToken">
                     
                       <div class="mb-3">
                         <label for="NameInput" class="form-label">Nome</label>
                         <input type="text" class="form-control" id="NameInput" name="nome" aria-describedby="emailHelp">
                         
                        </div>
                        <div class="mb-3">    
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Cadastrar Categoria</button>
                    </form>
                </div>  
         </div>
     <!-- </div> -->

</template>


<script>
export default {
     data(){
        return{
                  
        }
     },
     props: [
        'rota',
        'csrfToken'
     ]   
}
</script>