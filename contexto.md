 # Transporta

## Objetivo

Plataforma web para ligar clientes a motoristas e viaturas adequados a serviços de transporte. A aplicação usa PHP, MySQL, HTML, CSS e JavaScript, mantendo a estrutura existente do projeto sempre que possível.

## Serviços

- **Reboque:** transporte de um veículo avariado. O cliente informa a localização e os detalhes do veículo; o serviço deve encaminhar o pedido a um motorista com viatura adequada.
- **Aluguer de autocarro:** transporte reservado para excursões, viagens escolares, eventos e necessidades semelhantes. Deve permitir indicar data, horários, percurso e número de passageiros.
- **Transporte de materiais:** recolha e entrega de objetos como cadeiras, geleiras, materiais de construção e compras. Deve permitir descrever a carga e indicar dimensões ou peso quando forem relevantes.

## Perfis e fluxos

### Cliente

1. Cria uma conta ou inicia sessão.
2. Escolhe o tipo de serviço e informa origem, destino, data e hora, além dos detalhes específicos do pedido.
3. Consulta as opções compatíveis e o respetivo preço ou orçamento. O preço deve resultar de regras configuráveis; se faltar uma integração ou tabela tarifária, apresentar um orçamento pendente de confirmação em vez de inventar um valor definitivo.
4. Seleciona uma opção e submete o pedido.
5. Acompanha o estado do pedido e, quando a localização estiver disponível, a posição do motorista atribuído.
6. Após a conclusão, consulta o resumo, avalia o serviço e acede às opções de pagamento disponíveis.

### Motorista

- As contas são criadas e geridas pelo administrador; não existe registo público de motoristas.
- Pode iniciar sessão e definir a disponibilidade: **disponível**, **em serviço** ou **indisponível**. Um serviço ativo impede a aceitação de outro pedido.
- Recebe pedidos compatíveis com o seu perfil e a sua viatura. Tem 60 segundos para aceitar; sem resposta, o pedido passa ao próximo motorista elegível.
- Atualiza o serviço pelas etapas **a caminho**, **cheguei à origem**, **serviço iniciado** e **serviço concluído**.
- Consulta os serviços do dia, os valores associados e a avaliação média. Apresentar valores como estimativas/ganhos registados, não como cálculo de salário, salvo se existir uma regra de remuneração definida.

### Administrador

- Consulta e gere clientes, motoristas, viaturas, pedidos e viagens.
- Cria, edita, consulta e desativa motoristas e viaturas, preservando o histórico relacionado.
- Consulta estados de disponibilidade e serviço; pode consultar localizações apenas quando estas forem recolhidas e partilhadas com autorização.
- Pode bloquear contas de clientes e consultar o histórico. A eliminação deve respeitar as relações e o histórico de viagens; preferir desativação quando a eliminação física comprometer esses dados.
- Gere ou consulta preços, estados dos pedidos e definições necessárias à operação.

## Regras de operação

- Um pedido só se torna viagem confirmada depois de um motorista elegível o aceitar; o cliente deve ver claramente o estado e os próximos passos.
- Estados sugeridos para o pedido: **pendente**, **a procurar motorista**, **aceite**, **a caminho**, **no local**, **em curso**, **concluído**, **cancelado** e **sem motorista**.
- O prazo de 60 segundos e a atribuição sequencial precisam de processamento no servidor; não depender apenas de um temporizador no navegador.
- GPS em tempo real requer permissão do utilizador, contexto seguro (HTTPS) e uma estratégia de atualização/armazenamento. Sem serviço de mapas ou GPS configurado, indicar indisponibilidade e não mostrar posições fictícias.
- Pagamentos online, mapas, notificações e cálculo automático de preços dependem de fornecedores e credenciais externas. Integrar apenas quando houver configuração; caso contrário, apresentar o estado da integração e manter um fluxo demonstrável sem simular uma operação real.
- Proteger os dados pessoais e as localizações: recolher apenas o necessário, limitar o acesso por perfil e não expor dados privados em páginas públicas.

## Convenções do projeto

- Usar português nos textos da interface e, conforme a observação do projeto, nomes de variáveis, funções, classes CSS e IDs em português.
- Reaproveitar a estrutura atual (`model/`, `public/css/`, `public/js/` e `index.php`) e propor novas pastas apenas quando forem necessárias.
- Manter credenciais fora dos ficheiros públicos e usar consultas preparadas com PDO.