# SOLID
SOLID e boas práticas de Orientação a objetos.

## Alguns pontos para ter em mente
### Coesão:
O princípio de coesão diz que as nossas classes devem conter apenas o que faz sentido
considerando a sua definição.

- Uma classe coesa faz bem uma única coisa
- Classes coesas não devem ter várias responsabilidades

### Encapsulamento:
O princípio de encapsulamento diz que não se deve expor ou faltar detalhes de implementação a uma classe. 
Cada classe deve ter os detalhes dos seus comportamentos encapsulados dentro dos seus métodos.

- Getters e ‘setters’ não são formas eficientes de aplicar encapsulamento
- É interessante fornecer acesso apenas ao que é necessário em nossas classes
- O encapsulamento torna o uso das nossas classes mais fácil e intuitivo

### Acoplamento:
O princípio de acoplamento diz que em algumas situações existirão classes que dependerão de outra(as)
e nestes casos será importante manter essa ligação apenas em pontos estáticos ou que não mudarão
com frequência.

- Acoplamento é a dependência entre classes
- Acoplamento nem sempre é ruim, e é impossível criar um sistema sem nenhum acoplamento
- Devemos controlar o nível de acoplamento na nossa aplicação

## Single Responsibility Principle
O princípio da responsabilidade única é um dos princípios SOLID. Os princípios SOLID, são uma série de
cinco princípios introduzidos por Robert C. Martin(Uncle bob), como boas práticas de ‘design’ de ‘software’.
O princípio da responsabilidade única, foca na preocupação de que uma classe tenha seu papel e venha desempenhar 
somente ele de forma eficiente.

## Open Closed Principle
O princípio de Aberto/Fechado propõe que entidades (classes, funções, módulos, etc.)
devem ser abertas para extensão, mas fechadas para modificação.
Aberto para extensão significa que, ao receber um novo requerimento,
é possível adicionar um novo comportamento. Fechado para modificação significa que,
para introduzir um novo comportamento (extensão),
não é necessário modificar o código existente.

## Liskov Substitution Principle (LSP)
O Princípio de Substituição de Liskov diz que objetos podem ser substituídos
por seus subtipos sem que isso afete a execução correta do programa.

## Dependency Inversion Principle
O Princípio de Inversão de Dependência possui duas definições:
1. Módulos de alto nível não devem depender de módulos de baixo nível e ambos devem depender de abstrações;
2. Abstrações não devem depender de detalhes, mas detalhes devem depender de abstrações.

# Interface Segregation Principle (ISP)
O Princípio de Segregação de Interface diz que ‘interfaces’ específicas são melhores que uma única
‘interface’ de propósito geral.
Em programação orientada a objetos, quando falamos de ‘interface’, estamos falando do conjunto de métodos
que um objeto expõe, ou seja, das maneiras como nós podemos interagir com esse objeto.
Toda mensagem (ou chamada de método) que um objeto recebe constitui uma ‘interface’.
A ‘interface’ funciona como um contrato: nós definimos o comportamento da ‘interface’ na forma de
diferentes métodos que ela possui. Cada classe que deseja compartilhar o comportamento dessa
‘interface’ precisa implementar os métodos dela. Quando a classe utiliza uma ‘interface’,
ela assina esse contrato dizendo que irá implementar todos os métodos dessa ‘interface’.