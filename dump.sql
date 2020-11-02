--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2
-- Dumped by pg_dump version 12.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: article; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.article (
    article_id integer NOT NULL,
    article_type_id integer NOT NULL,
    article_header character varying(250) NOT NULL,
    article_main text NOT NULL,
    article_date date NOT NULL,
    article_img character varying NOT NULL
);


ALTER TABLE public.article OWNER TO postgres;

--
-- Name: article_type; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.article_type (
    article_type_id integer NOT NULL,
    article_type_name character varying(50) NOT NULL,
    article_type_color character varying(30) DEFAULT 'blue'::character varying NOT NULL
);


ALTER TABLE public.article_type OWNER TO postgres;

--
-- Name: article_type_article_type_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.article_type_article_type_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.article_type_article_type_id_seq OWNER TO postgres;

--
-- Name: article_type_article_type_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.article_type_article_type_id_seq OWNED BY public.article_type.article_type_id;


--
-- Name: articles_article_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.articles_article_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.articles_article_id_seq OWNER TO postgres;

--
-- Name: articles_article_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.articles_article_id_seq OWNED BY public.article.article_id;


--
-- Name: client; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.client (
    client_id integer NOT NULL,
    client_email character varying(50),
    client_password text,
    client_country text
);


ALTER TABLE public.client OWNER TO postgres;

--
-- Name: client_client_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.client_client_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.client_client_id_seq OWNER TO postgres;

--
-- Name: client_client_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.client_client_id_seq OWNED BY public.client.client_id;


--
-- Name: product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.product (
    product_id integer NOT NULL,
    product_brand character varying(50) NOT NULL,
    product_price double precision NOT NULL,
    product_type character(50) NOT NULL
);


ALTER TABLE public.product OWNER TO postgres;

--
-- Name: product_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.product_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.product_product_id_seq OWNER TO postgres;

--
-- Name: product_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;


--
-- Name: product_product_type_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.product_product_type_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.product_product_type_seq OWNER TO postgres;

--
-- Name: product_product_type_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.product_product_type_seq OWNED BY public.product.product_type;


--
-- Name: article article_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article ALTER COLUMN article_id SET DEFAULT nextval('public.articles_article_id_seq'::regclass);


--
-- Name: article_type article_type_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article_type ALTER COLUMN article_type_id SET DEFAULT nextval('public.article_type_article_type_id_seq'::regclass);


--
-- Name: client client_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client ALTER COLUMN client_id SET DEFAULT nextval('public.client_client_id_seq'::regclass);


--
-- Name: product product_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);


--
-- Name: product product_type; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product ALTER COLUMN product_type SET DEFAULT nextval('public.product_product_type_seq'::regclass);


--
-- Data for Name: article; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.article (article_id, article_type_id, article_header, article_main, article_date, article_img) FROM stdin;
3	2	Новый OnePlus 8T получил 120-герцовый дисплей и "неубиваемый" аккумулятор	Компания OnePlus сегодня анонсировала обновление флагманской модели, получившей название 8T. Презентация новинки велась в прямом эфире на YouTube-канале производителя.\nДисплей диагональю 6,55 дюймов получил одно важное нововведение — теперь матрица способна обновлять картинку на частоте в 120 герц. В остальном Fluid AMOLED похож на экран предшественника: разрешение FullHD+, врезанная в дисплей 16-Мп фронтальная камера и максимальная яркость в 1100 нит.	2020-01-09	https://www.ixbt.com/img/n1/news/2020/8/1/oneplus-8t-360-degree-renders-by-@onleaks-73_large.jpg
2	1	Московских врачей наградили орденом за борьбу с COVID-19	Главврач станции скорой медицинской помощи имени Пучкова Николай Плавунов и руководитель департамента здравоохранения Москвы Алексей Хрипун награждены орденом Александра Невского за заслуги в борьбе с коронавирусом, говорится в документе на официальном сайте правовой информации.	2020-01-09	https://image.jimcdn.com/app/cms/image/transf/none/path/s3b659094e728e49a/image/i5d03ec13b6ec1d57/version/1465985822/image.jpg
\.


--
-- Data for Name: article_type; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.article_type (article_type_id, article_type_name, article_type_color) FROM stdin;
2	Технологии	blue
1	Здоровье	green
\.


--
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.client (client_id, client_email, client_password, client_country) FROM stdin;
1	bob@gmail.com	\N	\N
5	bob1@gmail.com	\N	\N
6	test@gmail.com	1234	Россия
9	test2@gmail.com	1234	Россия
10	test3@gmail.com	1234	Украина
\.


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.product (product_id, product_brand, product_price, product_type) FROM stdin;
2	DC Shoes	900	Футболка                                          
\.


--
-- Name: article_type_article_type_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.article_type_article_type_id_seq', 2, true);


--
-- Name: articles_article_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.articles_article_id_seq', 3, true);


--
-- Name: client_client_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.client_client_id_seq', 10, true);


--
-- Name: product_product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.product_product_id_seq', 2, true);


--
-- Name: product_product_type_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.product_product_type_seq', 1, false);


--
-- Name: article_type article_type_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article_type
    ADD CONSTRAINT article_type_pkey PRIMARY KEY (article_type_id);


--
-- Name: article articles_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article
    ADD CONSTRAINT articles_pkey PRIMARY KEY (article_id);


--
-- Name: client client_client_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_client_email_key UNIQUE (client_email);


--
-- Name: client client_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_pkey PRIMARY KEY (client_id);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);


--
-- Name: article article_article_type_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article
    ADD CONSTRAINT article_article_type_id_fkey FOREIGN KEY (article_type_id) REFERENCES public.article_type(article_type_id);


--
-- PostgreSQL database dump complete
--

