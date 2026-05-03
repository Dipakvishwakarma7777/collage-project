CREATE DATABASE mca_event;
USE mca_event;

CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 email VARCHAR(100),
 password VARCHAR(255)
);

CREATE TABLE events(
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(100),
 event_date DATE
);

CREATE TABLE registrations(
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 event_id INT
);

INSERT INTO events(title,event_date) VALUES
('Hackathon','2026-05-10'),
('Workshop','2026-05-15');