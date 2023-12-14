# TODOLIST COM CATEGORIAS

## Planejamento
### Entidades
- usuário
- tarefas
- categorias

#### usuários -> tarefas
um usuário pode **criar** várias tarefas

#### usuários -> categorias
um usuário pode **ter** várias categorias

#### tarefas -> usuários
uma tarefa **sempre** vai pertencer a um único usuário

#### tarefas -> categorias
uma tarefa **sempre** vai pertencer a uma categoria

#### categorias -> tarefas
uma categoria pode **ter** várias tarefas

#### categorias -> usuários
uma categoria **sempre** vai pertencer a um usuário

### Detalhamento das *migrations*

#### Usuário (users)
```
padrão do laravel
```

#### Tarefa (tasks)
```
id
titulo
data
descricao
categoria_id
usuario_id
```

#### Categoria (categories)
```
id
titulo
cor (hexadecimal)
usuario_id
```

## Diagrama ER
[LucidChart](https://lucid.app/lucidchart/e0657f26-d563-4e49-99dc-cf0b8ffe3cf1/edit?viewport_loc=-387%2C-34%2C1986%2C844%2C0_0&invitationId=inv_c865b32b-5088-435a-a0b6-d9de7f08602d)