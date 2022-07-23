<!------------------------------------------------------------------------------------------------------->
<!-- Modal editar payload -->
<div class="modal fade" id="editarpayload" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Editar payload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $id_payload = $_POST['editar_payload'];
                $sql = $conn->query("SELECT * FROM payloads WHERE id='$id_payload'");
                $dados = $sql->fetch(PDO::FETCH_ASSOC);  ?>

                <form action="?page=edit&action=payload" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">

                    <label for=""><span style="color: black;">Nome</span></label>
                    <input type="text" value="<?= $dados['Name'] ?>" name="nome" id="nome" class="form-control">

                    <label for=""><span style="color: black;">Flag</span></label>
                    <select name="flag" class="form-control">
                        <?php
                        if ($dados['FLAG'] == 'vivo') { ?>
                            <option value="vivo">VIVO</option>
                            <option value="claro">CLARO</option>
                            <option value="tim">TIM</option>
                            <option value="oi">OI</option>
                        <?php } else if ($dados['FLAG'] == 'claro') { ?>
                            <option value="claro">CLARO</option>
                            <option value="vivo">VIVO</option>
                            <option value="tim">TIM</option>
                            <option value="oi">OI</option>
                        <?php } else if ($dados['FLAG'] == 'tim') { ?>
                            <option value="tim">TIM</option>
                            <option value="claro">CLARO</option>
                            <option value="vivo">VIVO</option>
                            <option value="oi">OI</option>
                        <?php } else { ?>
                            <option value="oi">OI</option>
                            <option value="tim">TIM</option>
                            <option value="claro">CLARO</option>
                            <option value="vivo">VIVO</option>
                        <?php } ?>
                    </select>

                    <label for=""><span style="color: black;">Payload</span></label>
                    <textarea class="form-control" name="pay" rows="4"><?= $dados['Payload'] ?></textarea>

                    <label for=""><span style="color: black;">SNI</span></label>
                    <input type="text" name="sni" value="<?= $dados['SNI'] ?>" class="form-control">

                    <label for=""><span style="color: black;">TlsIP</span></label>
                    <input type="text" name="tlsip" value="<?= $dados['TlsIP'] ?>" class="form-control">

                    <label for=""><span style="color: black;">ProxyIP</span></label>
                    <input type="text" name="proxyip" value="<?= $dados['ProxyIP'] ?>" class="form-control">

                    <label for=""><span style="color: black;">Proxy Port</span></label>
                    <input type="text" name="proxyport" value="<?= $dados['ProxyPort'] ?>" class="form-control">

                    <label for=""><span style="color: black;">Info</span></label>
                    <select name="info" class="form-control">
                        <option value="tlsws">WS/SSL</option>
                        <option value="direct">SSH/Direct</option>
                        <option value="proxy">SSH/Proxy</option>
                        <option value="ssl">SSH/SSL</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="edt_payload" class="btn btn-primary">Salvar mudanças</button></form>
                <form action="?page=del&action=payload" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    <button type="submit" name="del_payload" class="btn btn-danger">Excluir</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal editar servidor -->
<div class="modal fade" id="editarservidor" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Editar servidor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $id_servidor = $_POST['editar_servidor'];
                $sql = $conn->query("SELECT * FROM servidores WHERE id='$id_servidor'");
                $dados = $sql->fetch(PDO::FETCH_ASSOC);  ?>

                <form action="?page=edit&action=server" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">

                    <label for=""><span style="color: black;">Nome</span></label>
                    <input type="text" value="<?= $dados['Name'] ?>" name="nome" id="nome" class="form-control">

                    <label for=""><span style="color: black;">Tipo</span></label>
                    <select name="tipo" class="form-control">
                        <?php
                        if ($dados['TYPE'] == 'premium') { ?>
                            <option value="premium">PREMIUM</option>
                            <option value="free">FREE</option>
                        <?php } else { ?>
                            <option value="free">FREE</option>
                            <option value="premium">PREMIUM</option>
                        <?php } ?>
                    </select>

                    <label for=""><span style="color: black;">Flag</span></label>
                    <select name="flag" class="form-control">
                        <option value="br.png">BRASIL</option>
                    </select>

                    <label for=""><span style="color: black;">Server IP</span></label>
                    <input type="text" name="serverip" value="<?= $dados['ServerIP'] ?>" class="form-control">

                    <label for=""><span style="color: black;">CheckUser</span></label>
                    <input type="text" name="checkuser" value="<?= $dados['CheckUser'] ?>" class="form-control">

                    <label for=""><span style="color: black;">Server Port</span></label>
                    <input type="text" name="serverport" value="<?= $dados['ServerPort'] ?>" class="form-control">

                    <label for=""><span style="color: black;">SSL Port</span></label>
                    <input type="text" name="sslport" value="<?= $dados['SSLPort'] ?>" class="form-control">

            </div>
            <div class="modal-footer">
                <button type="submit" name="edt_servidor" class="btn btn-primary">Salvar mudanças</button></form>
                <form action="?page=del&action=server" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    <button type="submit" name="del_servidor" class="btn btn-danger">Excluir</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal editar porta -->
<div class="modal fade" id="editarporta" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Editar porta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
                $id_porta = $_POST['editar_porta'];
                $sql = $conn->query("SELECT * FROM portas WHERE id='$id_porta'");
                $dados = $sql->fetch(PDO::FETCH_ASSOC);  ?>

                <form action="?page=edit&action=port" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">

                    <label for=""><span style="color: black;">Porta</span></label>
                    <input type="text" value="<?= $dados['Porta'] ?>" name="porta" id="porta" class="form-control">

            </div>
            <div class="modal-footer">
                <button type="submit" name="edt_porta" class="btn btn-primary">Salvar mudanças</button></form>
                <form action="?page=del&action=port" method="post">
                    <input type="hidden" name="id" value="<?= $dados['id'] ?>">
                    <button type="submit" name="del_porta" class="btn btn-danger">Excluir</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal adicionar servidor -->
<div class="modal fade" id="addservidor" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Adicionar servidor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="?page=add&action=server" method="post">

                    <label for=""><span style="color: black;">Nome</span></label>
                    <input type="text" name="nome" id="nome" class="form-control">

                    <label for=""><span style="color: black;">Tipo</span></label>
                    <select name="tipo" class="form-control">
                        <option value="premium">PREMIUM</option>
                        <option value="free">FREE</option>
                    </select>

                    <label for=""><span style="color: black;">Flag</span></label>
                    <select name="flag" class="form-control">
                        <option value="br.png">BRASIL</option>
                    </select>

                    <label for=""><span style="color: black;">Server IP</span></label>
                    <input type="text" name="serverip" class="form-control">

                    <label for=""><span style="color: black;">CheckUser</span></label>
                    <input type="text" name="checkuser" class="form-control">

                    <label for=""><span style="color: black;">Server Port</span></label>
                    <input type="text" name="serverport" value="22" class="form-control">

                    <label for=""><span style="color: black;">SSL Port</span></label>
                    <input type="text" name="sslport" class="form-control">

            </div>
            <div class="modal-footer">
                <button type="submit" name="addserver" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->
<!-- Modal adicionar payload -->
<div class="modal fade" id="addpayload" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Adicionar payload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="?page=add&action=payload" method="post">

                    <label for=""><span style="color: black;">Nome</span></label>
                    <input type="text" name="nome" id="nome" class="form-control">

                    <label for=""><span style="color: black;">Flag</span></label>
                    <select name="flag" class="form-control">
                        <option value="vivo">VIVO</option>
                        <option value="claro">CLARO</option>
                        <option value="tim">TIM</option>
                        <option value="oi">OI</option>
                    </select>

                    <label for=""><span style="color: black;">Payload</span></label>
                    <textarea class="form-control" name="pay" rows="4"></textarea>

                    <label for=""><span style="color: black;">SNI</span></label>
                    <input type="text" name="sni" class="form-control">

                    <label for=""><span style="color: black;">TlsIP</span></label>
                    <input type="text" name="tlsip" class="form-control">

                    <label for=""><span style="color: black;">ProxyIP</span></label>
                    <input type="text" name="proxyip" class="form-control">

                    <label for=""><span style="color: black;">Proxy Port</span></label>
                    <input type="text" name="proxyport" class="form-control">

                    <label for=""><span style="color: black;">Info</span></label>
                    <select name="info" class="form-control">
                        <option value="tlsws">WS/SSL</option>
                        <option value="direct">SSH/Direct</option>
                        <option value="proxy">SSH/Proxy</option>
                        <option value="ssl">SSH/SSL</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="addpay" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal editar porta -->
<div class="modal fade" id="addporta" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Editar porta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="?page=add&action=port" method="post">

                    <label for=""><span style="color: black;">Porta</span></label>
                    <input type="text" name="porta" id="porta" class="form-control">

            </div>
            <div class="modal-footer">
                <button type="submit" name="addporta" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal configurações-->
<div class="modal fade" id="modalconfig" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black" class="modal-title" id="exampleModalLabel">Configurações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="?page=edit&action=config" method="post">
                    <span style="color: black">
                        <div class="row">
                            <div class="col">
                                <label for="">Versão</label>
                                <input type="text" name="versao" class="form-control" value="<?= Functions::getConfig('versao') ?>">
                            </div>
                            <div class="col">
                                <label for="">Notas</label>
                                <input type="text" name="notas" class="form-control" value="<?= Functions::getConfig('notas') ?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="">SMS</label>
                                <input type="text" name="sms" class="form-control" value="<?= Functions::getConfig('sms') ?>">
                            </div>
                            <div class="col">
                                <label for="">Update</label>
                                <input type="text" name="update" class="form-control" value="<?= Functions::getConfig('update') ?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="<?= Functions::getConfig('email') ?>">
                            </div>
                            <div class="col">
                                <label for="">Contato</label>
                                <input type="text" name="contato" class="form-control" value="<?= Functions::getConfig('contato') ?>">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Termos</label>
                                <input type="text" name="termos" class="form-control" value="<?= Functions::getConfig('termos') ?>">
                            </div>
                            <div class="col">
                                <label for="">CheckUser</label>
                                <select name="checkuser" class="form-control">
                                    <option value="true">Ativado</option>
                                    <option value="false">Desativado</option>
                                </select>
                            </div>
                        </div>
                    </span>


            </div>
            <div class="modal-footer">
                <button type="submit" name="config" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- Modal sms -->
<div class="modal fade" id="sms" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Alterar SMS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="?page=edit&action=sms" method="post">

                    <label for=""><span style="color: black;">SMS</span></label>
                    <textarea name="sms" class="form-control" rows="4"><?=Functions::getConfig('msg')?></textarea>

            </div>
            <div class="modal-footer">
                <button type="submit" name="edt_sms" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------->

<!-- perfil -->
<div class="modal fade" id="perfil" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black;" class="modal-title" id="">Alterar perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="?page=edit&action=user" method="post">
                    <input type="hidden" name="id" value="<?= Functions::getUser('id', $_SESSION['login']) ?>">

                    <h5 style="color: black;">

                        <i class="fa fa-warning"></i> Caso queira trocar a senha, preencha o campo: Senha atual e Nova senha.
                    </h5><br>

                    <div class="row">
                        <div class="col">
                            <label for=""><span style="color: black;"><b>Alterar nome</b></span></label>
                            <input type="text" name="nome" value="<?= Functions::getUser('nome', $_SESSION['login']) ?>" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;"><b>Alterar login</b></span></label>
                            <input type="text" name="login" value="<?= $_SESSION['login'] ?>" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for=""><span style="color: black;"><b>Senha atual</b></span></label>
                            <input type="text" name="senha" class="form-control">
                        </div>
                        <div class="col">
                            <label for=""><span style="color: black;"><b>Nova senha</b></span></label>
                            <input type="text" name="senha2" class="form-control">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="edit_user" class="btn btn-primary">Salvar mudanças</button></form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
