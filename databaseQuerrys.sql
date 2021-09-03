CREATE TABLE posts_dave (
id INT NOT NULL AUTO_INCREMENT,
post_title VARCHAR(255),
post_text TEXT,
post_img BLOB(500),
post_auteur VARCHAR(255),
post_likes INT,
time_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);