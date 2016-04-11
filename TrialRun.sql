--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: donation; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE donation (
    "time" date NOT NULL,
    donor character varying(256) NOT NULL,
    amount numeric NOT NULL,
    project integer NOT NULL,
    CONSTRAINT donation_amount_check CHECK ((amount > (0)::numeric))
);


ALTER TABLE donation OWNER TO postgres;

--
-- Name: project_id; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE project_id
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE project_id OWNER TO postgres;

--
-- Name: project; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE project (
    id integer DEFAULT nextval('project_id'::regclass) NOT NULL,
    owner character varying(256),
    title character varying(256) NOT NULL,
    description character varying(2048),
    startdate date,
    expirydate date,
    country character varying(64),
    target numeric,
    status character varying(16) DEFAULT 'Current'::character varying,
    CONSTRAINT project_check CHECK ((expirydate > startdate)),
    CONSTRAINT project_status_check CHECK ((((status)::text = 'Current'::text) OR ((status)::text = 'Expired'::text))),
    CONSTRAINT project_target_check CHECK ((target > (0)::numeric))
);


ALTER TABLE project OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE users (
    username character varying(256) NOT NULL,
    password character varying(256) NOT NULL,
    name character varying(128) NOT NULL,
    email character varying(256) NOT NULL,
    gender character varying(6) NOT NULL,
    address character varying(512),
    dateofbirth date NOT NULL,
    phone numeric NOT NULL,
    admin character(1) DEFAULT 'N'::bpchar NOT NULL,
    CONSTRAINT user_admin_check CHECK (((admin = 'Y'::bpchar) OR (admin = 'N'::bpchar)))
);


ALTER TABLE users OWNER TO postgres;

--
-- Data for Name: donation; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY donation ("time", donor, amount, project) FROM stdin;
2016-04-02	test1	5000	1
2016-01-02	haziq	1200	2
2016-01-12	haziq	1600	6
2016-04-07	haziq	78000	10
2016-02-23	haziq	16000	4
2016-04-14	haziq	500000	4
2015-07-30	batman	800000	4
2013-04-11	batman	950000	3
2014-07-23	batman	90000000	5
2013-09-24	batman	800	9
2016-01-20	blackwidow	55000	6
2015-10-13	blackwidow	86000000	2
2015-10-06	blackwidow	56000	1
2014-09-09	alexis	86000	1
\.


--
-- Data for Name: project; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY project (id, owner, title, description, startdate, expirydate, country, target, status) FROM stdin;
1	lightningman	Lighthouse Waterway	Construction of a lighthouse along Singapore River	2016-04-02	2022-04-30	Singapore	500000	Current
2	projectmaster	Trump Towers 4	Skyscrapers in Trump's name	2007-09-18	2016-04-02	USA	8000000	Expired
3	projectmaster	Underwater World	A giant fishtank for the world''s largest fishes	1998-07-20	2010-08-08	China	170000	Current
4	projectmaster	Safari Tours	Africa's big game hunting	2000-06-19	2025-02-14	Others	500000000	Current
5	projectmaster	Fresh Air Bags	Combating China's air pollution	2016-03-12	2018-11-22	China	1000000000	Current
7	projectmaster	Rubber Plantations	Care for rubber plants	1997-12-29	2026-11-30	Malaysia	50000	Current
9	projectmaster	Flying Bicycles	Design and Manufacturing of hover-bikes	2016-02-01	2018-10-19	USA	10000	Current
10	projectmaster	Alien Spotting	Camping @ Area 51	2016-05-02	2022-06-19	USA	90000	Current
6	projectmaster	Indian Restaurant	Bringing Southern Indian Cuisine to the UK	2012-10-15	2016-03-06	UK	809000	Expired
13	haziq	Jurassic Park	R&D to bring the dinosaurs back	2004-02-20	2022-09-14	Singapore	800000000	Current
\.


--
-- Name: project_id; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('project_id', 13, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY users (username, password, name, email, gender, address, dateofbirth, phone, admin) FROM stdin;
alexis	123	Alexis Verbane	lexi@alex.com	Female	Wonderland	1999-02-19	8765498765	N
admin	admin	Admin Overlord	admin@admin.com	Male	21st Jumpstreet	1991-11-11	12345678	Y
test	123	Test User	test@test.com	Male	Test Land 	1999-04-01	98765646678	N
brock	123	Brock Lesnar	brocklesnar@beast.com	Male	Suplex City	1984-10-17	445679078756	N
batman	123	Bruce Wayne	batman@night.com	Male	Gotham City	2016-04-02	898764780	N
haziq	123	Haziq Rosli	haziq@gmail.com	Male	Outram Park	1942-04-29	99876458	N
blackwidow	123	Natasha Romanov	blackwidow@shield.org	Female	Shield HQ	2002-11-05	123843972	N
lightningman	123	Mike Awesome	mikeawesome@miz.tv	Female	Awe-Inspiring Mountain	1998-06-23	472593459	N
test1	123	Test Second	firefox@falcom.org	Female	Test Land	2016-01-02	786788786767	N
projectmaster	123	Master Project	master@projects.com	Female	The Matrix	1998-12-22	999999666	N
\.


--
-- Name: donation_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY donation
    ADD CONSTRAINT donation_pkey PRIMARY KEY ("time", donor, project);


--
-- Name: project_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY project
    ADD CONSTRAINT project_pkey PRIMARY KEY (id);


--
-- Name: user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT user_pkey PRIMARY KEY (username);


--
-- Name: donation_donor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY donation
    ADD CONSTRAINT donation_donor_fkey FOREIGN KEY (donor) REFERENCES users(username) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: donation_project_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY donation
    ADD CONSTRAINT donation_project_fkey FOREIGN KEY (project) REFERENCES project(id) ON DELETE CASCADE;


--
-- Name: project_owner_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY project
    ADD CONSTRAINT project_owner_fkey FOREIGN KEY (owner) REFERENCES users(username);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

