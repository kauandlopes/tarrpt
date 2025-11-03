<main class="p-6">
    <div class="modal fade" id="modalDev" tabindex="-1" aria-labelledby="modalDevLabel" aria-hidden="true">
        <div class="modal-dialog">

            <form action="{{ route('tarrpt.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDevLabel">Upload de RPT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body space-y-4"> 
                        
                        <div class="flex flex-col">
                            <label class="font-semibold mb-1">Versão:</label>
                            <input type="text" name="versao" placeholder="Versão" 
                                class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="flex flex-col">
                            <label class="font-semibold mb-1">Segmento:</label>
                            <select name="segmento" class="form-select rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Selecione um segmento</option>
                                {{-- @foreach($segmentos as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach --}}
                                <option value="1">1 - Login / Autenticação</option> 
                                <option value="2">2 - Segmentos / Categorias</option> 
                                <option value="3">3 - Relatórios Gerenciais</option> 
                                <option value="4">4 - Vendas / Pedidos</option> 
                                <option value="5">5 - Cadastro de Usuários</option> 
                                <option value="6">6 - Configurações Gerais</option> 
                                <option value="7">7 - Dashboard Principal</option> 
                                <option value="8">8 - Gerenciamento de Estoque</option> 
                                <option value="9">9 - Faturamento / Cobrança</option> 
                                <option value="10">10 - Lista de Clientes</option> 
                                <option value="11">11 - Busca Avançada</option> 
                                <option value="12">12 - Perfil do Usuário</option> 
                                <option value="13">13 - Notificações</option> 
                                <option value="14">14 - Auditoria de Logs</option> 
                                <option value="15">15 - Importação de Dados</option> 
                                <option value="16">16 - Suporte / Ajuda</option> 
                                <option value="17">17 - Agendamento de Tarefas</option> 
                                <option value="18">18 - Detalhes do Produto</option> 
                                <option value="19">19 - Histórico de Acesso</option> 
                                <option value="20">20 - Cadastro de Fornecedores</option> 
                                <option value="21">21 - Gráficos de Desempenho</option> 
                                <option value="22">22 - Contabilidade / Fluxo de Caixa</option> 
                                <option value="23">23 - Backup e Restauração</option> 
                                <option value="24">24 - Definições de Permissões</option> 
                                <option value="25">25 - Processamento em Lote</option> 
                                <option value="26">26 - Mensagens Internas</option> 
                                <option value="27">27 - Mapa de Localização</option>
                            </select>
                        </div>

                        <div class="flex flex-col">
                            <label class="font-semibold mb-1">Tela:</label>
                            <input type="text" name="tela" placeholder="Tela" 
                                class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="flex flex-col">
                            <label class="font-semibold mb-1">Cliente:</label>
                            <input type="text" name="cliente" placeholder="Cliente" 
                                class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="flex flex-col">
                            <label for="file" class="font-semibold mb-1">Escolha o arquivo:</label>
                            <input type="file" name="file" id="file" required 
                                class="form-control rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                         <button type="submit" class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">
                            Enviar
                        </button>
                    </div>

                </div>
            </form>
            </div>
    </div>
    </main>