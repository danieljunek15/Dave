CREATE TABLE posts_dave (
id INT NOT NULL AUTO_INCREMENT,
post_title VARCHAR(255),
post_text TEXT,
post_img BLOB(255),
post_likes INT,
time_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

CREATE TABLE users_dave (
id INT NOT NULL AUTO_INCREMENT,
user_name VARCHAR(255) NOT NULL,
user_ww VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE link_dave (
id INT NOT NULL AUTO_INCREMENT,
id_users INT NOT NULL,
id_posts INT NOT NULL,
PRIMARY KEY (id),
index(id),
index(id),
FOREIGN KEY (id_users) REFERENCES users_dave(id),
FOREIGN KEY (id_posts) REFERENCES posts_dave(id)
);