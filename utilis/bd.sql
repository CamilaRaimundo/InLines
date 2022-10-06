-- Scripts do banco 

CREATE TABLE usuario(
	id_usuario BIGSERIAL NOT NULL PRIMARY KEY,
	nome VARCHAR (50) NOT NULL,
	email VARCHAR  (40) UNIQUE,
	senha VARCHAR (30) NOT NULL UNIQUE,
	telefone INT (14) NOT NULL UNIQUE,
	cpf INT (11) NOT NULL UNIQUE,
	ativo BOOLEAN NOT NULL,
	data_exclusao timestamp,
	genero VARCHAR (10),
	datanasc DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS public.usuario
(
    id_usuario BIGSERIAL NOT NULL,
    nome character varying(50) COLLATE pg_catalog."default" NOT NULL,
    email character varying(40) COLLATE pg_catalog."default" NOT NULL,
    senha character varying(30) COLLATE pg_catalog."default" NOT NULL,
    telefone integer NOT NULL,
    cpf integer NOT NULL,
    ativo boolean NOT NULL,
    data_exclusao timestamp without time zone,
    genero character varying(10) COLLATE pg_catalog."default" NOT NULL,
    datanasc date NOT NULL,
    CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario),
    CONSTRAINT usuario_cpf_key UNIQUE (cpf),
    CONSTRAINT usuario_email_key UNIQUE (email),
    CONSTRAINT usuario_telefone_key UNIQUE (telefone)
)

CREATE TABLE produto(
	id_produto BIGSERIAL NOT NULL PRIMARY KEY,
	nome VARCHAR (50) NOT NULL,
	descricao TEXT NOT NULL,
	preco NUMERIC (3,2) NOT NULL,
	ativo BOOLEAN NOT NULL,
	data_exclusao timestamp,
	codigovisual VARCHAR(50) NOT NULL,
	custo NUMERIC(3,2) NOT NULL,
	margem_lucro NUMERIC(10,2) NOT NULL,
	icms NUMERIC(10,2) NOT NULL,
	img varchar(100) NOT NULL
	);
    
CREATE TABLE IF NOT EXISTS public.produto
(
    id_produto bigint NOT NULL,
    nome character varying(50) COLLATE pg_catalog."default" NOT NULL,
    descricao text COLLATE pg_catalog."default" NOT NULL,
    quantidade integer NOT NULL,
    -- quantidade --> estoque
    preco numeric(10,2) NOT NULL,
    ativo boolean NOT NULL,
    data_exclusao timestamp without time zone,
    cod_visual character varying(50) COLLATE pg_catalog."default" NOT NULL,
    custo numeric(10,2) NOT NULL,
    margem_lucro numeric(10,2) NOT NULL,
    icms numeric(10,2) NOT NULL,
    CONSTRAINT produto_pkey PRIMARY KEY (id_produto)
)

CREATE TABLE IF NOT EXISTS public.venda
(
    id_venda bigint NOT NULL,
    id_usuario bigint NOT NULL,
    data timestamp without time zone NOT NULL,
    -- ativo
    -- data venda
    CONSTRAINT venda_pkey PRIMARY KEY (id_venda),
    CONSTRAINT fk_usuariovenda FOREIGN KEY (id_usuario)
        REFERENCES public.usuario (id_usuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

CREATE TABLE IF NOT EXISTS public.carrinho
(
    id_carrinho bigserial not null,
    id_produto bigint NOT NULL,
    id_usuario bigint NOT NULL,
    quantidade integer NOT NULL,
    -- data date
    CONSTRAINT carrinho_pkey PRIMARY KEY (id_carrinho),
    CONSTRAINT fk_carrinhoprodutos FOREIGN KEY (id_produto)
        REFERENCES public.produto (id_produto) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT fk_carrinhousuarios FOREIGN KEY (id_usuario)
        REFERENCES public.usuario (id_usuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)



CREATE TABLE IF NOT EXISTS public.itemvenda 
(
    id_itemvenda bigint NOT NULL,
    id_produto bigint NOT NULL,
    -- id_venda
    -- qtde de compra
    -- valor venda
    CONSTRAINT itemvenda_pkey PRIMARY KEY (id_itemvenda),
    CONSTRAINT fk_itemvendaproduto FOREIGN KEY (id_produto)
        REFERENCES public.produto (id_produto) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)



-- -------------------------------------------------------------

CREATE TABLE IF NOT EXISTS public.carrinho
(
    id_carrinho bigint NOT NULL,
    id_usuario bigint NOT NULL,
    id_produto bigint NOT NULL,
    data_produto_carrinho timestamp NOT NULL,
    quantidade bigint,
    CONSTRAINT carrinho_pkey PRIMARY KEY (id_carrinho),
    CONSTRAINT carrinho_id_produto_fkey FOREIGN KEY (id_produto)
        REFERENCES public.produto (id_produto) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT carrinho_id_usuario_fkey FOREIGN KEY (id_usuario)
        REFERENCES public.usuario (id_usuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

CREATE TABLE IF NOT EXISTS public.venda
(
    id_venda bigint NOT NULL,
    id_usuario bigint NOT NULL,
    data_hora_venda timestamp without time zone NOT NULL,
    excluido_venda boolean NOT NULL,
    data_exclusao_venda timestamp without time zone,
    CONSTRAINT venda_pkey PRIMARY KEY (id_venda),
    CONSTRAINT venda_id_usuario_fkey FOREIGN KEY (id_usuario)
        REFERENCES public.usuario (id_usuario) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

CREATE TABLE IF NOT EXISTS public.itemvenda
(
    id_itemvenda bigint NOT NULL,
    id_produto bigint NOT NULL,
    id_venda bigint NOT NULL,
    qtde_compra bigint,
    valor_venda numeric(10,2),
    CONSTRAINT itens_vendas_pkey PRIMARY KEY (id_itemvenda),
    CONSTRAINT itens_vendas_id_produto_fkey FOREIGN KEY (id_produto)
        REFERENCES public.produto (id_produto) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT itens_vendas_id_venda_fkey FOREIGN KEY (id_venda)
        REFERENCES public.venda (id_venda) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)


-- ---------------------------------------------------------------------------------------------

CREATE TABLE carrinho
(
    id_carrinho bigserial NOT NULL PRIMARY KEY,
    id_produto bigint NOT NULL,
    id_usuario bigint NOT NULL,
    quantidade_carrinho int NOT NULL,
   	data_carrinho date NOT NULL,
    CONSTRAINT fk_carrinhoproduto FOREIGN KEY (id_produto)
        REFERENCES produto (id_produto),
    CONSTRAINT fk_carrinhousuarios FOREIGN KEY (id_usuario)
        REFERENCES usuario (id_usuario) 
)

drop table if exists itemvenda;
drop table if exists venda;
CREATE TABLE venda
(
    id_venda bigserial NOT NULL PRIMARY KEY,
    id_usuario bigint NOT NULL,
	ativo boolean NOT NULL,
    data_venda date NOT NULL,
    CONSTRAINT fk_usuariovenda FOREIGN KEY (id_usuario)
        REFERENCES usuario (id_usuario) 
)

CREATE TABLE itemvenda 
(
    id_itemvenda bigserial NOT NULL PRIMARY KEY,
    id_produto bigint NOT NULL,
    id_venda bigint NOT NULL,
    quantidade_compra int NOT NULL,
    valor_venda numeric(15,2) NOT NULL,
    CONSTRAINT fk_itemvendaproduto FOREIGN KEY (id_produto)
        REFERENCES produto (id_produto),
    CONSTRAINT fk_itemvendaVenda FOREIGN KEY (id_venda)
        REFERENCES venda (id_venda)
-- 	CONSTRAINT fk_itemvendaquantidade_compra FOREIGN KEY (quantidade_compra)
--         REFERENCES carrinho (quantidade_carrinho)
)


