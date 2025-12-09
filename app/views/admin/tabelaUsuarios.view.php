<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de usuários</title>
    <!-- Links para os CSS -->
        <link rel="stylesheet" href="../../../public/css/tabelaUsuarios.css">
        <!-- Modais -->
        <link rel="stylesheet" href="../../../public/css/criarUsuario.css">
        <link rel="stylesheet" href="../../../public/css/editarUsuario.css">
        <link rel="stylesheet" href="../../../public/css/vizualizarUsuario.css">
        <link rel="stylesheet" href="../../../public/css/excluirUsuario.css">
    <!-- Metadados para as fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="containerGeral">
        <header>
            <h1>Tabela de Usuários</h1>
            <button class="criar" onclick="abrirModal('criar')">
                <svg class="criarButton" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 8H8V14H6V8H0V6H6V0H8V6H14V8Z" fill="#ffffff"/>
                </svg>

                <p>Criar Usuário</p>
            </button>
        </header>
        <div class="scroll-lateral">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>

                      <tr>                        
                        <td><?= $user->id ?></td>
                        <td> <img src="<?= $user->img_path ?>" width="60" height="60" style="object-fit: cover;"></td>
                        <td><?= $user->name ?>    </td>
                        <td><?= $user->email ?>   </td>

                        <td class="caixaAcoes">

                                 <button type="button" class="bot ver"  onclick="abrirModal('visualizar<?= $user->id ?>')" >
                                    <!--icone-->
                                    <svg class="iver" width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 12.5C8.24 12.5 6 10.26 6 7.5C6 4.74 8.24 2.5 11 2.5C13.76 2.5 16 4.74 16 7.5C16 10.26 13.76 12.5 11 12.5ZM11 4.5C9.34 4.5 8 5.84 8 7.5C8 9.16 9.34 10.5 11 10.5C12.66 10.5 14 9.16 14 7.5C14 5.84 12.66 4.5 11 4.5Z"/>
                                    </svg>
                                </button>
                                <!--botao editar-->
                                <button class="bot editar"  onclick="abrirModal('editar<?= $user->id ?>')">
                                    <!--icone-->
                                    <svg class="ieditar" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 14.2525V18.0025H3.75L14.81 6.9425L11.06 3.1925L0 14.2525ZM17.71 4.0425C18.1 3.6525 18.1 3.0225 17.71 2.6325L15.37 0.2925C14.98 -0.0975 14.35 -0.0975 13.96 0.2925L12.13 2.1225L15.88 5.8725L17.71 4.0425Z"/>
                                    </svg>
                                  </button>
                                <!--botao excluir-->
                                <button class="bot excluir"  onclick="abrirModal('excluir<?= $user->id ?>')">
                                    <!--icone-->
                                    <svg class="iexcluir" width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V4H1V16ZM14 1H10.5L9.5 0H4.5L3.5 1H0V3H14V1Z"/>
                                    </svg>
                                </button>
                    
                        </td>
                      </tr>

                    <?php endforeach ?>
                   
                </tbody>
            </table>
        </div>

        <!--Paginação -------------------------------------------------------------------------------------------------------------------->

        <?php require(__DIR__ . '/../admin/components/paginacaoUsers.php') ?>

        <!--Modais ----------------------------------------------------------------------------------------------------------------------->
 

        <div class="modais modalCriar" id="criar">
   
            <div class="modalc">
                

                        
              <div class="containerRight">
                <form  method="POST" action="/tabelaUsuarios/create" enctype="multipart/form-data" >
                      <label for="uploadFoto_new" class="imgPerfilB" style="cursor: pointer;">
                    
                    <img id="preview-new" src="../../../public/assets/Imagens/usuario.png" width="60" height="60" style="object-fit: cover;">
                    
                    <div class="botaoAddFoto"><span>Add Foto</span></div>
                </label>
                    <input class="botaoAddFoto" type="file" name="img_path" accept="image/*" id="uploadFoto_new" style="display: none;" onchange="previewImagem(event, 'new')">
               
                        <div class="tituloA">
                            <h1 class="tituloAdd">Vamos adicionar um</h1>
                            <h1 class="tituloAdd">novo usuário!</h1>
                        </div>
                        <div class="guiaA">
                            <p class="guiaAdd">Preencha as informações do usuário</p>
                            <p class="guiaAdd">nos campos a seguir</p>
                        </div>

                    </div>
                 
                    <div class="containerLeft">
                        <div class="inputs">
                            <div class="nomeB">
                                <div class="inputTitulo">
                                    <p>Nome</p>
                                    <p class="asterisco">*</p>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="emailB">
                                <div class="inputTitulo">
                                    <p>Email</p>
                                    <p class="asterisco">*</p>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                            <div class="senhaB">
                                <div class="inputTitulo">
                                    <p>Senha</p>
                                    <p class="asterisco">*</p>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        </div>
                        <div class="caixaBarraHorizontal">
                            <div class="barraHorizontal"></div>
                        </div>
                        <div class="caixaBotoes">
                            <button type="button" class="cancel" onclick="fecharModal('criar')">Cancelar</button>
                            <button type="submit" class="save" >Salvar</button>
                        </div>
                    </div>
                </form>
              
            </div>

                
        </div>


         <?php foreach($users as $user): ?>

            


            <div class="modais modalEditar" id="editar<?= $user->id ?>">

            
                <div class="modaled">
                    
                    <div class="containerRight">
                          <form method="POST" action="/tabelaUsuarios/edit" enctype="multipart/form-data" >
                      
                      <label for="uploadFoto_<?= $user->id ?>" class="imgPerfilB" style="cursor: pointer;">
                    
                    <img id="preview-<?= $user->id ?>" src="<?= $user->img_path ?>" alt="Foto de Perfil">
                    
                    <div class="botaoAddFoto"><span>Trocar</span></div>
                </label>
                         <input class="botaoAddFoto"  type="file"  name="img_path" accept="image/*"  id="uploadFoto_<?= $user->id ?>"  style="display: none;"  onchange="previewImagem(event, '<?= $user->id ?>')">

                        <div class="tituloA">
                            <h1 class="tituloAdd">Edição de usuário</h1>
                        </div>
                        <div class="guiaA">
                            <p class="guiaAdd">Apague ou altere as informações</p>
                            <p class="guiaAdd">sobre este usuário</p>
                        </div>
                    </div>


                 
                   
                     <div class="containerLeft">
                        
                       
                        <div class="inputs">
                            <div class="nomeB">
                                <div class="inputTitulo">
                                    <p>Nome</p>
                                </div>
                                <input type="text" id="name" name="name" value="<?= $user->name ?>" required>
                                <img src="../../../public/assets/editar.svg" alt="" class="iconeEdit" >
                            </div>
                            <div class="emailB">
                                <div class="inputTitulo">
                                    <p>Email</p>
                                </div>
                                <input type="email" id="email" name="email" value="<?= $user->email ?>" required>
                                <img class="iconeEdit" src="../../../public/assets/editar.svg" alt="">
                            </div>
                            <div class="senhaB">
                                <div class="inputTitulo">
                                    <p>Senha</p>
                                </div>
                                <input type="password" id="password" name="password" value="<?= $user->password ?>" required>
                                <img class="iconeEdit" src="../../../public/assets/editar.svg" alt="">
                            </div>
                        </div>
                        <div class="caixaBarraHorizontal">
                            <div class="barraHorizontal"></div>
                        </div>
                       

                             <div class="caixaBotoes">
                                <div class="cancel" onclick="fecharModal('editar<?= $user->id ?>')">Cancelar</div>
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <button type="submit" class="save" >Salvar</button>
                                </div>
                     
                       </div>
            
                   

                 
                </div>
            </div>

            </form>

            <?php endforeach ?>



            <?php foreach($users as $user): ?>

            <div class="modaisP modalVizualizar" id="visualizar<?= $user->id ?>">
                <div class="modalvi">
                    <div class="coverVizu">
                        <div class="sombravizu">
                            <img src="<?= $user->img_path ?>" alt="">
                        </div>
                    </div>
                    <div class="conteudoVizu">
                        <div class="dadosVizu">
                            <div class="idUsuario">
                                <p class="caixaTitulo">ID</p>
                                <div class="caixaUsuario"> <p><?= $user->id ?> </p></div> 
                            </div>
                            <div class="nomeVizu">
                                <p class="caixaTitulo">Nome</p>
                                <div class="caixaNome"><p><?= $user->name ?></p></div>
                            </div>
                            <div class="emailVizu">
                                <p class="caixaTitulo">Email</p>
                                <div class="caixaEmail"><p><?= $user->email ?></p></div>
                            </div>
                            <div class="senhaVizu">
                                <p class="caixaTitulo">Senha</p>
                                <div class="caixaSenha"><p><?= $user->password ?></p></div> 
                            </div>
                        </div>
                        <div class="botoesVizu">
                            <div class="cancel" onclick="fecharModal('visualizar<?= $user->id ?>')">Cancelar</div>
                            <div class="save" onclick="fecharModal('visualizar<?= $user->id ?>')">Salvar</div>
                        </div>
                    </div>
                </div>
            </div>

          <?php endforeach ?>

  

         <?php foreach($users as $user): ?>

            <div class="modaisP modalExcluir" id="excluir<?= $user->id ?>">
                <div class="modalex">
                    <div class="containerExcluir">
                        <div class="sombraExcluir">
                            <img src="<?= $user->img_path ?>" alt="">
                        </div>
                        <div class="conteudoExcluir">
                            <div class="textoExcluir parte01">Tem certeza que deseja</div>
                            <div class="textoExcluir parte02">excluir o usuário<p> <?= $user->name ?> </p>?</div>
                            <div class="textoExcluir parte03">Essa ação não poderá ser desfeita.</div>
                        </div>
                        <div class="botoesExcluir">
                            <div class="cancel" onclick="fecharModal('excluir<?= $user->id ?>')">Cancelar</div>
                            <form method="POST" action="/tabelaUsuarios/delete">
                                <input type="hidden" name="id" value=" <?= $user->id ?>" >
                                <button type="submit" class="excluirM" onclick="fecharModal('excluir<?= $user->id ?>')">Excluir</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

         <?php endforeach ?> 

  


    </div>

    <script src="../../../public/js/tabelaUsuarios.js"></script>
</body>
</html>