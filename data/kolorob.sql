--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.1
-- Dumped by pg_dump version 9.5.1

-- Started on 2016-03-04 03:19:28 BDT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 9 (class 2615 OID 17768)
-- Name: kolorob; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA kolorob;


ALTER SCHEMA kolorob OWNER TO postgres;

--
-- TOC entry 2637 (class 0 OID 0)
-- Dependencies: 9
-- Name: SCHEMA kolorob; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA kolorob IS 'Save The Children';


SET search_path = kolorob, pg_catalog;

--
-- TOC entry 236 (class 1255 OID 17769)
-- Name: set_longfinal(); Type: FUNCTION; Schema: kolorob; Owner: postgres
--

CREATE FUNCTION set_longfinal() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
    BEGIN
        -- Check that empname and salary are given
      IF NEW.longitude IS NOT NULL THEN
         RETURN NEW;
            ELSE 
            
              IF NEW.area ='Baunia Badh' THEN
              NEW.longitude:='90.380171';
              END IF;
              IF NEW.area ='Paris Road' THEN
              NEW.longitude:='90.372001';
              END IF;
           RETURN NEW;
          
    END IF;
    END;
$$;


ALTER FUNCTION kolorob.set_longfinal() OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 183 (class 1259 OID 17770)
-- Name: education_service_provider; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE education_service_provider (
    identifier_id character varying NOT NULL,
    serviceprovider_id character varying NOT NULL,
    edu_subcategory_id integer NOT NULL,
    category_id integer,
    edu_name_eng character varying,
    edu_name_ban character varying,
    edtype character varying,
    hostel_facility character varying,
    transport_facility character varying,
    playground character varying,
    contact_person_designation character varying,
    contact_no character varying,
    email_address character varying,
    website_link character varying,
    fb_link character varying,
    registered_with character varying,
    registration_no character varying,
    total_students integer,
    total_classes integer,
    total_teachers integer,
    course_provided character varying,
    shift character varying,
    canteen_facility character varying,
    data_collector_name character varying,
    date character varying,
    edited_by character varying,
    uploading_time character varying,
    additional_info character varying,
    node_type character varying,
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    road character varying,
    block character varying,
    landmark character varying,
    breaktime2 character varying,
    additional_time character varying
);


ALTER TABLE education_service_provider OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 17776)
-- Name: education_service_provider_course; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE education_service_provider_course (
    course_id character varying NOT NULL,
    identifier_id character varying NOT NULL,
    edu_subcategory_id integer NOT NULL,
    edu__course_name character varying,
    edu_course_duration character varying,
    edu_course_admission_time character varying,
    edu_course_cost character varying,
    edu_course_type character varying NOT NULL
);


ALTER TABLE education_service_provider_course OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 17782)
-- Name: education_service_provider_exam_fees_details; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE education_service_provider_exam_fees_details (
    fee_id character varying NOT NULL,
    identifier_id character varying(20) NOT NULL,
    pre_school_free character varying(20),
    pre_school_stipend_speciality character varying(20),
    pre_school_stipend_type character varying(20),
    pre_school_stipend_details character varying(20),
    pre_school_max_fee character varying(20),
    pre_school_min_fee character varying(20),
    pre_school_coaching_fee character varying(20),
    pre_school_additional_fee character varying(20),
    i_v_free character varying(20),
    i_v_stipend_speciality character varying(20),
    i_v_stipend_type character varying(20),
    i_v_stipend_details character varying(20),
    i_v_max_fee character varying(20),
    i_v_min_fee character varying(20),
    i_v_coaching_fee character varying(20),
    i_v_additional_fee character varying(20),
    vi_x_free character varying(20),
    vi_x_stipend_speciality character varying(20),
    vi_x_stipend_type character varying(20),
    vi_x_stipend_details character varying(20),
    vi_x_max_fee character varying(20),
    vi_x_min_fee character varying(20),
    vi_x_coaching_fee character varying(20),
    vi_x_additional_fee character varying(20),
    xi_xii_free character varying(20),
    xi_xii_stipend_speciality character varying(20),
    xi_xii_stipend_type character varying(20),
    xi_xii_stipend_details character varying(20),
    xi_xii_max_fee character varying(20),
    xi_xii_min_fee character varying(20),
    xi_xii_coaching_fee character varying(20),
    xi_xii_additional_fee character varying(20),
    uni_free character varying(20),
    uni_stipend_speciality character varying(20),
    uni_stipend_type character varying(20),
    uni_stipend_details character varying(20),
    uni_max_fee character varying(20),
    uni_min_fee character varying(20),
    uni_coaching_fee character varying(20),
    uni_additional_fee character varying(20)
);


ALTER TABLE education_service_provider_exam_fees_details OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 17788)
-- Name: education_service_provider_result; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE education_service_provider_result (
    identifier_id character varying(20) NOT NULL,
    result_id character varying(20) NOT NULL,
    pec_students character varying,
    pec_passed character varying,
    pec_golden character varying,
    pec_normal character varying,
    jsc_students character varying,
    jsc_passed character varying,
    jsc_golden character varying,
    jsc_normal character varying,
    ssc_students character varying,
    ssc_passed character varying,
    ssc_golden character varying,
    ssc_normal character varying,
    hsc_students character varying,
    hsc_passed character varying,
    hsc_golden character varying,
    hsc_normal character varying,
    ssc_v_students character varying,
    ssc_v_passed character varying,
    ssc_v_golden character varying,
    ssc_v_normal character varying,
    hsc_v_students character varying,
    hsc_v_passed character varying,
    hsc_v_golden character varying,
    hsc_v_normal character varying,
    alim_students character varying,
    alim_passed character varying,
    alim_golden character varying,
    alim_normal character varying,
    fazil_students character varying,
    fazil_passed character varying,
    fazil_golden character varying,
    fazil_normal character varying,
    kamil_students character varying,
    kamil_passed character varying,
    kamil_golden character varying,
    kamil_normal character varying,
    a_level_students character varying,
    a_level_passed character varying,
    a_level_golden character varying,
    a_level_normal character varying,
    o_level_students character varying,
    o_level_passed character varying,
    o_level_golden character varying,
    o_level_normal character varying
);


ALTER TABLE education_service_provider_result OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 17794)
-- Name: education_subcategory; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE education_subcategory (
    edu_subcategory_id integer NOT NULL,
    edu_subcategory_name character varying,
    category_id integer NOT NULL
);


ALTER TABLE education_subcategory OWNER TO postgres;

--
-- TOC entry 188 (class 1259 OID 17800)
-- Name: ent_bookshop; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_bookshop (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    borrow_cost character varying(100),
    lending_allowed character varying(10),
    membership_cost character varying(100),
    offers character varying(1000),
    offer_details character varying(1000),
    membership_cost_ffp boolean,
    membership_cost_foc boolean
);


ALTER TABLE ent_bookshop OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 17806)
-- Name: ent_field; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_field (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    event_cost character varying(10),
    playground_cost character varying(10),
    remark character varying(1000),
    event_cost_ffp boolean,
    event_cost_foc boolean,
    playground_cost_ffp boolean,
    playground_cost_foc boolean
);


ALTER TABLE ent_field OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 17812)
-- Name: ent_fitnessbeauty; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_fitnessbeauty (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    year_of_establishment integer,
    num_workers integer,
    offers character varying(1000),
    offer_details character varying(1000),
    service_type character varying(100),
    type character varying(100),
    service_details character varying(1000)
);


ALTER TABLE ent_fitnessbeauty OWNER TO postgres;

--
-- TOC entry 191 (class 1259 OID 17818)
-- Name: ent_musical_group; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_musical_group (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    musical_group_id integer NOT NULL,
    remarks character varying(1000),
    music_type character varying(20)
);


ALTER TABLE ent_musical_group OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 17824)
-- Name: ent_musical_group_musical_group_id_seq; Type: SEQUENCE; Schema: kolorob; Owner: postgres
--

CREATE SEQUENCE ent_musical_group_musical_group_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ent_musical_group_musical_group_id_seq OWNER TO postgres;

--
-- TOC entry 2638 (class 0 OID 0)
-- Dependencies: 192
-- Name: ent_musical_group_musical_group_id_seq; Type: SEQUENCE OWNED BY; Schema: kolorob; Owner: postgres
--

ALTER SEQUENCE ent_musical_group_musical_group_id_seq OWNED BY ent_musical_group.musical_group_id;


--
-- TOC entry 193 (class 1259 OID 17826)
-- Name: ent_ngo; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_ngo (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    play_materials character varying(10),
    books character varying(10),
    media character varying(10),
    drama character varying(10),
    remarks character varying(1000),
    play_materials_ffp boolean,
    play_materials_foc boolean,
    books_ffp boolean,
    books_foc boolean,
    media_ffp boolean,
    media_foc boolean,
    drama_ffp boolean,
    drama_foc boolean
);


ALTER TABLE ent_ngo OWNER TO postgres;

--
-- TOC entry 194 (class 1259 OID 17832)
-- Name: ent_park; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_park (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    entry_fee character varying(10),
    facilities_fee character varying(10),
    remarks character varying(1000),
    entry_fee_ffp boolean,
    entry_fee_foc boolean,
    facilities_fee_ffp boolean,
    facilities_fee_foc boolean
);


ALTER TABLE ent_park OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 17838)
-- Name: ent_serviceprovider; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_serviceprovider (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    node_name character varying(200),
    node_name_bn character varying(200),
    data_name character varying(200),
    data_date character varying(50),
    node_designation character varying(80),
    node_contact character varying(30),
    node_email character varying(100),
    node_additional character varying(1000),
    node_website character varying(100),
    node_facebook character varying(100),
    node_registered_with character varying(100),
    node_registration_number character varying(100),
    edited_by character varying,
    uploading_time character varying,
    node_type character varying,
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    category_id integer DEFAULT 3,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    road character varying,
    block character varying,
    landmark character varying,
    break_time2 character varying,
    additional_time character varying
);


ALTER TABLE ent_serviceprovider OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 17845)
-- Name: ent_shishupark; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_shishupark (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    entry_fee character varying(200),
    ride_fee character varying(200),
    additional_fee character varying(200),
    remarks character varying(1000),
    entry_fee_ffp boolean,
    entry_fee_foc boolean,
    ride_fee_ffp boolean,
    ride_fee_foc boolean,
    additional_fee_ffp boolean,
    additional_fee_foc boolean
);


ALTER TABLE ent_shishupark OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 17851)
-- Name: ent_subcategory; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_subcategory (
    category_id integer NOT NULL,
    ent_sub_category_id integer NOT NULL,
    node_id character varying(15) NOT NULL,
    ent_sub_category_header integer NOT NULL
);


ALTER TABLE ent_subcategory OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 17854)
-- Name: ent_theatre; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_theatre (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    theatre_id integer NOT NULL,
    event_type character varying(200),
    event_fee character varying(1000),
    event_date character varying(50),
    remarks character varying(1000),
    event_fee_ffp boolean,
    event_fee_foc boolean
);


ALTER TABLE ent_theatre OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 17860)
-- Name: ent_theatre_theatre_id_seq; Type: SEQUENCE; Schema: kolorob; Owner: postgres
--

CREATE SEQUENCE ent_theatre_theatre_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ent_theatre_theatre_id_seq OWNER TO postgres;

--
-- TOC entry 2639 (class 0 OID 0)
-- Dependencies: 199
-- Name: ent_theatre_theatre_id_seq; Type: SEQUENCE OWNED BY; Schema: kolorob; Owner: postgres
--

ALTER SEQUENCE ent_theatre_theatre_id_seq OWNED BY ent_theatre.theatre_id;


--
-- TOC entry 200 (class 1259 OID 17862)
-- Name: ent_training_centre; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE ent_training_centre (
    node_id character varying(15) NOT NULL,
    ent_sub_category_id integer NOT NULL,
    cost character varying,
    num_members integer,
    offers character varying(1000),
    offer_details character varying(1000),
    service_type character varying(200),
    num_instruments integer,
    cost_ffp boolean,
    cost_foc boolean,
    service_details character varying(1000)
);


ALTER TABLE ent_training_centre OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 17868)
-- Name: f_bills; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_bills (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(10),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_bills OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 17874)
-- Name: f_insurance; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_insurance (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_insurance OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 17880)
-- Name: f_loan; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_loan (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_loan OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 17886)
-- Name: f_money_transaction; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_money_transaction (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    service_provider character varying(500) NOT NULL,
    ref_num character varying
);


ALTER TABLE f_money_transaction OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 17892)
-- Name: f_node; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_node (
    node_id character varying(15) NOT NULL,
    node_name character varying(300),
    data_name character varying(300),
    data_date character varying(30),
    node_designation character varying(50),
    node_contact character varying(30),
    node_email character varying(30),
    node_additional character varying(1000),
    node_website character varying(100),
    node_facebook character varying(100),
    node_registered_with character varying(100),
    node_registration_number character varying(100),
    edited_by character varying(300),
    ref_num integer NOT NULL,
    name_bn character varying(300),
    "timestamp" character varying,
    node_type character varying(30),
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    category_id integer,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    road character varying,
    block character varying,
    landmark character varying,
    break_time2 character varying,
    additional_time character varying
);


ALTER TABLE f_node OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 17898)
-- Name: f_payment_documents; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_payment_documents (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_payment_documents OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 17904)
-- Name: f_social; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_social (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_social OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 17910)
-- Name: f_tax; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_tax (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(10),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_tax OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 17916)
-- Name: f_tution; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE f_tution (
    f_node_id character varying(15) NOT NULL,
    service_name character varying(300) NOT NULL,
    yes_no character varying(10),
    costs character varying(500),
    remark character varying(1000),
    ref_num character varying
);


ALTER TABLE f_tution OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 17922)
-- Name: h_node; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE h_node (
    node_id character varying(15) NOT NULL,
    node_name character varying(300),
    data_name character varying(300),
    data_date character varying(20),
    node_designation character varying(50),
    node_contact character varying(30),
    node_email character varying(30),
    node_additional character varying(1000),
    node_website character varying(100),
    node_facebook character varying(100),
    node_registered_with character varying(100),
    node_registration_number character varying(100),
    edited_by character varying(300),
    ref_num character varying(200) NOT NULL,
    name_bn character varying(300),
    "timestamp" character varying,
    node_type character varying(30),
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    category_id integer,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    landmark character varying,
    road character varying,
    block character varying,
    breaktime2 character varying,
    additional_time character varying
);


ALTER TABLE h_node OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 17931)
-- Name: h_service; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE h_service (
    node_id character varying(15) NOT NULL,
    amb_fees character varying(100),
    mat_fees character varying(100),
    amb_remarks character varying(1000),
    mat_remarks character varying(1000),
    outdoor_fees character varying(100),
    outdoor_free character varying(100),
    outdoor_doctor_fee character varying(100),
    outdoor_emergency_fee character varying(100),
    outdoor_remarks character varying(2000),
    ref_num character varying
);


ALTER TABLE h_service OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 17940)
-- Name: h_vaccine; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE h_vaccine (
    node_id character varying(15) NOT NULL,
    vaccine_name character varying(1000) NOT NULL,
    vaccine_fee character varying(500),
    vaccine_remarks character varying(2000),
    ref_num character varying
);


ALTER TABLE h_vaccine OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 17946)
-- Name: job_service_provider; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE job_service_provider (
    identifier_id character varying NOT NULL,
    serviceprovider_id character varying NOT NULL,
    job_subcategory_id integer NOT NULL,
    category_id integer,
    contact_person_designation character varying,
    contact_no character varying,
    email_address character varying,
    website_link character varying,
    fb_link character varying,
    registered_with character varying,
    registration_no character varying,
    data_collector_name character varying,
    date character varying,
    edited_by character varying,
    additional_info character varying,
    uploading_time character varying,
    node_type character varying,
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    road character varying,
    block character varying,
    landmark character varying,
    break_time2 character varying,
    additional_time character varying,
    job_name character varying
);


ALTER TABLE job_service_provider OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 17952)
-- Name: job_subcategory; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE job_subcategory (
    job_subcategory_id integer NOT NULL,
    job_subcategory_name character varying,
    category_id integer NOT NULL
);


ALTER TABLE job_subcategory OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 17958)
-- Name: job_type_service_provider; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE job_type_service_provider (
    job_id character varying NOT NULL,
    identifier_id character varying NOT NULL,
    job_subcategory_id integer NOT NULL,
    job_name character varying,
    job_news_source character varying,
    job_remark character varying,
    job_type character varying
);


ALTER TABLE job_type_service_provider OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 17964)
-- Name: legal_aid_service_provider; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE legal_aid_service_provider (
    identifier_id character varying NOT NULL,
    serviceprovider_id character varying NOT NULL,
    legal_aid_subcategory_id integer,
    category_id integer,
    legal_aid_name_eng character varying,
    legal_aid_name_ban character varying,
    contact_person_designation character varying,
    contact_no character varying,
    email_address character varying,
    website_link character varying,
    fb_link character varying,
    registered_with character varying,
    registration_no character varying,
    data_collector_name character varying,
    date character varying,
    edited_by character varying,
    additional_info character varying,
    uploading_time character varying,
    node_type character varying,
    area character varying,
    address character varying,
    latitude character varying,
    longitude character varying,
    opening_time character varying,
    break_time character varying,
    closing_time character varying,
    road character varying,
    block character varying,
    landmark character varying,
    break_time2 character varying,
    additional_time character varying
);


ALTER TABLE legal_aid_service_provider OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 17970)
-- Name: legal_aid_subcategory; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE legal_aid_subcategory (
    legal_aid_subcategory_id integer NOT NULL,
    legal_aid_subcategory_name character varying,
    category_id integer NOT NULL
);


ALTER TABLE legal_aid_subcategory OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 17976)
-- Name: legal_aid_type_service_provider_legal_advice; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE legal_aid_type_service_provider_legal_advice (
    legal_advice_id character varying NOT NULL,
    identifier_id character varying NOT NULL,
    legal_aid_subcategory_id integer NOT NULL,
    legal_aid_service_name character varying,
    legal_aid_free character varying,
    legal_aid_cost character varying,
    legal_aid_person_authority character varying,
    legal_aid_remark character varying
);


ALTER TABLE legal_aid_type_service_provider_legal_advice OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 17982)
-- Name: legal_aid_type_service_provider_salishi; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE legal_aid_type_service_provider_salishi (
    s_id character varying NOT NULL,
    identifier_id character varying NOT NULL,
    legal_aid_subcategory_id integer NOT NULL,
    s_service_name character varying,
    s_free character varying,
    s_cost character varying,
    s_person_authority character varying,
    s_remark character varying
);


ALTER TABLE legal_aid_type_service_provider_salishi OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 17994)
-- Name: sub_categories; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE sub_categories (
    category_id integer NOT NULL,
    "time" timestamp without time zone,
    subcategory_id integer NOT NULL,
    subcategory_name character varying(1000),
    subcategory_header character varying(200),
    catname character varying
);


ALTER TABLE sub_categories OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 18000)
-- Name: user; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE "user" (
    username character varying NOT NULL,
    password character varying
);


ALTER TABLE "user" OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 18006)
-- Name: user_feedback_seq; Type: SEQUENCE; Schema: kolorob; Owner: postgres
--

CREATE SEQUENCE user_feedback_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_feedback_seq OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 18008)
-- Name: user_feedback; Type: TABLE; Schema: kolorob; Owner: postgres
--

CREATE TABLE user_feedback (
    username character varying,
    contactno integer,
    issuetype character varying,
    issuedetails character varying,
    userid integer DEFAULT nextval('user_feedback_seq'::regclass) NOT NULL,
    categoryname character varying,
    subcategoryname character varying,
    feedback_time character varying,
    userage character varying
);


ALTER TABLE user_feedback OWNER TO postgres;

--
-- TOC entry 2439 (class 2604 OID 18015)
-- Name: musical_group_id; Type: DEFAULT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_musical_group ALTER COLUMN musical_group_id SET DEFAULT nextval('ent_musical_group_musical_group_id_seq'::regclass);


--
-- TOC entry 2441 (class 2604 OID 18016)
-- Name: theatre_id; Type: DEFAULT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_theatre ALTER COLUMN theatre_id SET DEFAULT nextval('ent_theatre_theatre_id_seq'::regclass);


--
-- TOC entry 2446 (class 2606 OID 18018)
-- Name: Education_Course_Id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY education_service_provider_course
    ADD CONSTRAINT "Education_Course_Id_pk" PRIMARY KEY (course_id, identifier_id, edu_course_type, edu_subcategory_id);


--
-- TOC entry 2448 (class 2606 OID 18020)
-- Name: Education_Fee_Id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY education_service_provider_exam_fees_details
    ADD CONSTRAINT "Education_Fee_Id_pk" PRIMARY KEY (fee_id, identifier_id);


--
-- TOC entry 2452 (class 2606 OID 18022)
-- Name: Education_Subcat_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY education_subcategory
    ADD CONSTRAINT "Education_Subcat_pk" PRIMARY KEY (category_id, edu_subcategory_id);


--
-- TOC entry 2444 (class 2606 OID 18024)
-- Name: Education__pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY education_service_provider
    ADD CONSTRAINT "Education__pk" PRIMARY KEY (identifier_id, edu_subcategory_id);


--
-- TOC entry 2502 (class 2606 OID 18026)
-- Name: Job_Subcat_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY job_subcategory
    ADD CONSTRAINT "Job_Subcat_pk" PRIMARY KEY (category_id, job_subcategory_id);


--
-- TOC entry 2510 (class 2606 OID 18028)
-- Name: Legal_advice_id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY legal_aid_type_service_provider_legal_advice
    ADD CONSTRAINT "Legal_advice_id_pk" PRIMARY KEY (legal_advice_id, identifier_id);


--
-- TOC entry 2508 (class 2606 OID 18030)
-- Name: Legal_aid_Subcat_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY legal_aid_subcategory
    ADD CONSTRAINT "Legal_aid_Subcat_pk" PRIMARY KEY (category_id, legal_aid_subcategory_id);


--
-- TOC entry 2450 (class 2606 OID 18032)
-- Name: Result_Id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY education_service_provider_result
    ADD CONSTRAINT "Result_Id_pk" PRIMARY KEY (identifier_id, result_id);


--
-- TOC entry 2454 (class 2606 OID 18034)
-- Name: ent_bookshop_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_bookshop
    ADD CONSTRAINT ent_bookshop_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2474 (class 2606 OID 18036)
-- Name: ent_centre_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_training_centre
    ADD CONSTRAINT ent_centre_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2456 (class 2606 OID 18038)
-- Name: ent_field_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_field
    ADD CONSTRAINT ent_field_pkey PRIMARY KEY (ent_sub_category_id, node_id);


--
-- TOC entry 2458 (class 2606 OID 18040)
-- Name: ent_fitnessbeauty_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_fitnessbeauty
    ADD CONSTRAINT ent_fitnessbeauty_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2460 (class 2606 OID 18042)
-- Name: ent_music_node_id_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_musical_group
    ADD CONSTRAINT ent_music_node_id_pkey PRIMARY KEY (node_id, ent_sub_category_id, musical_group_id);


--
-- TOC entry 2462 (class 2606 OID 18044)
-- Name: ent_ngo_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_ngo
    ADD CONSTRAINT ent_ngo_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2466 (class 2606 OID 18046)
-- Name: ent_node_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_serviceprovider
    ADD CONSTRAINT ent_node_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2464 (class 2606 OID 18048)
-- Name: ent_park_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_park
    ADD CONSTRAINT ent_park_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2468 (class 2606 OID 18050)
-- Name: ent_shishupark_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_shishupark
    ADD CONSTRAINT ent_shishupark_pkey PRIMARY KEY (node_id, ent_sub_category_id);


--
-- TOC entry 2470 (class 2606 OID 18052)
-- Name: ent_subcategory_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_subcategory
    ADD CONSTRAINT ent_subcategory_pkey PRIMARY KEY (category_id, ent_sub_category_id, node_id);


--
-- TOC entry 2472 (class 2606 OID 18054)
-- Name: ent_theatre_node_id_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY ent_theatre
    ADD CONSTRAINT ent_theatre_node_id_pkey PRIMARY KEY (node_id, ent_sub_category_id, theatre_id);


--
-- TOC entry 2504 (class 2606 OID 18056)
-- Name: job_id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY job_type_service_provider
    ADD CONSTRAINT job_id_pk PRIMARY KEY (job_id, identifier_id);


--
-- TOC entry 2500 (class 2606 OID 18058)
-- Name: job_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY job_service_provider
    ADD CONSTRAINT job_pk PRIMARY KEY (identifier_id, job_subcategory_id);


--
-- TOC entry 2506 (class 2606 OID 18060)
-- Name: legal_aid_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY legal_aid_service_provider
    ADD CONSTRAINT legal_aid_pk PRIMARY KEY (identifier_id, serviceprovider_id);


--
-- TOC entry 2476 (class 2606 OID 18062)
-- Name: pk_f_bill_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_bills
    ADD CONSTRAINT pk_f_bill_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2478 (class 2606 OID 18064)
-- Name: pk_f_insurance_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_insurance
    ADD CONSTRAINT pk_f_insurance_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2480 (class 2606 OID 18066)
-- Name: pk_f_loan_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_loan
    ADD CONSTRAINT pk_f_loan_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2482 (class 2606 OID 18068)
-- Name: pk_f_money_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_money_transaction
    ADD CONSTRAINT pk_f_money_node PRIMARY KEY (f_node_id, service_name, service_provider);


--
-- TOC entry 2484 (class 2606 OID 18070)
-- Name: pk_f_node_id; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_node
    ADD CONSTRAINT pk_f_node_id PRIMARY KEY (node_id, ref_num);


--
-- TOC entry 2486 (class 2606 OID 18072)
-- Name: pk_f_payment_documents_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_payment_documents
    ADD CONSTRAINT pk_f_payment_documents_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2488 (class 2606 OID 18074)
-- Name: pk_f_social_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_social
    ADD CONSTRAINT pk_f_social_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2490 (class 2606 OID 18076)
-- Name: pk_f_tax_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_tax
    ADD CONSTRAINT pk_f_tax_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2492 (class 2606 OID 18078)
-- Name: pk_f_tution_node; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY f_tution
    ADD CONSTRAINT pk_f_tution_node PRIMARY KEY (f_node_id, service_name);


--
-- TOC entry 2494 (class 2606 OID 18080)
-- Name: pk_h_node_ref; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY h_node
    ADD CONSTRAINT pk_h_node_ref PRIMARY KEY (node_id, ref_num);


--
-- TOC entry 2498 (class 2606 OID 18082)
-- Name: pk_h_vaccine; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY h_vaccine
    ADD CONSTRAINT pk_h_vaccine PRIMARY KEY (node_id, vaccine_name);


--
-- TOC entry 2496 (class 2606 OID 18084)
-- Name: pk_service_node_id; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY h_service
    ADD CONSTRAINT pk_service_node_id PRIMARY KEY (node_id);


--
-- TOC entry 2516 (class 2606 OID 18086)
-- Name: pk_user; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT pk_user PRIMARY KEY (username);


--
-- TOC entry 2512 (class 2606 OID 18088)
-- Name: s_id_pk; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY legal_aid_type_service_provider_salishi
    ADD CONSTRAINT s_id_pk PRIMARY KEY (s_id, identifier_id);


--
-- TOC entry 2514 (class 2606 OID 18090)
-- Name: sub_categories_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY sub_categories
    ADD CONSTRAINT sub_categories_pkey PRIMARY KEY (category_id, subcategory_id);


--
-- TOC entry 2518 (class 2606 OID 18092)
-- Name: user_feedback_pkey; Type: CONSTRAINT; Schema: kolorob; Owner: postgres
--

ALTER TABLE ONLY user_feedback
    ADD CONSTRAINT user_feedback_pkey PRIMARY KEY (userid);


-- Completed on 2016-03-04 03:19:29 BDT

--
-- PostgreSQL database dump complete
--

