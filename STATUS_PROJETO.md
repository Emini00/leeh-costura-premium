# STATUS PROJETO — Leeh Costura Premium

Última atualização:
31/05/2026


---

## Branch atual

feature/servicos-calculo-producao


---

## Concluído

### Funcionários

✔ CRUD

✔ Login


---

### Fábricas

✔ Cadastro

✔ Telefone

✔ Cidade


---

### Cargas

✔ Número da carga

✔ Relacionamento com fábrica

✔ Labels


Regras:

- carga pode repetir entre fábricas
- carga não define modelo


---

### Serviços

Status:

EM DESENVOLVIMENTO


Concluído:

✔ create

✔ edit

✔ labels

✔ cálculo automático

✔ valor unitário

✔ valor total

✔ desconto

✔ acréscimo

✔ motivo desconto

✔ motivo acréscimo


Regra:

valor_total =
quantidade × valor_unitario

valor_final =
valor_total
− desconto
+ acrescimo


Observações:

removido:
nome_sofa

modelo =
nome do sofá


---

### Fechamento

INICIADO

✔ model

✔ migration

✔ controller


Objetivo:

quantidade

valor bruto

desconto

acréscimo

valor final

status pagamento


---

## Regras do negócio

Cada funcionário normalmente produz:

1 sofá completo


Exceções:

produção emergencial
→ usar acréscimo


Pagamento:

valor por sofá
não usar:
valor por peça

Identificação do sofá:

✔ modelo identifica o sofá
✘ não existe mais campo nome_sofa

---

## Melhorias de UX

✔ labels no create
✔ labels no edit
✔ Botão de navegação por seta nas telas internas

Motivo:

placeholder desaparecia ao apagar

✔ Exibição de serviços em cards responsivos

✔ Exibição do funcionário na listagem de serviços

✔ Formatação de moeda brasileira

✔ Formatação de data brasileira

✔ Área de detalhes recolhível nos serviços

✔ Indicador visual de progresso por status


---


## Próximos passos

Finalizar serviços

Criar fechamento

Criar área funcionário

Criar pagamentos

Criar dashboard


---

## Backlog de melhorias

### Serviços

[x] Confirmar salvamento de desconto

[x] Confirmar salvamento de acréscimo

[x] Confirmar salvamento de valor final

[x] Remover definitivamente nome_sofa

[x] Utilizar modelo como identificador do sofá

[x] Melhorar exibição da listagem

[x] Adicionar área de detalhes recolhível

### Cargas

[ ] Criar campo de identificação da carga

A identificação deve aceitar:

- números
- letras
- combinações alfanuméricas

Exemplos:

01
Carga A
Ferrari
Urgente


### Usabilidade

[ ] Adicionar botão voltar em todos os edit
[ ] Adicionar botão voltar nas telas edit


### Fechamento

[ ] Finalizar estrutura da tabela fechamentos

[ ] Criar cálculo automático do fechamento

[ ] Relacionar fechamento com serviços


### Funcionários

[ ] Criar área do funcionário

[ ] Mostrar produção individual

[ ] Mostrar valor acumulado

[ ] Mostrar descontos e acréscimos


### Administração

[ ] Criar dashboard principal

[ ] Criar indicadores de produção