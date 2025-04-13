-- connect conatact message

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- connect user  not valid for this version, can be updated according to the need of the project
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- alter user  valid for the latest version
ALTER TABLE users ADD COLUMN IF NOT EXISTS name VARCHAR(255) NOT NULL;
ALTER TABLE users ADD COLUMN IF NOT EXISTS email VARCHAR(255) NOT NULL UNIQUE;
ALTER TABLE users ADD COLUMN IF NOT EXISTS dob DATE NOT NULL;
ALTER TABLE users ADD COLUMN IF NOT EXISTS address TEXT NOT NULL;
ALTER TABLE users ADD COLUMN IF NOT EXISTS profile_picture VARCHAR(255) DEFAULT NULL;
ALTER TABLE users ADD COLUMN IF NOT EXISTS password VARCHAR(255) NOT NULL;
ALTER TABLE users ADD COLUMN IF NOT EXISTS created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

-- if do not want profile picture
ALTER TABLE users DROP COLUMN profile_picture;
if not sure it is exist or not
ALTER TABLE users DROP COLUMN IF EXISTS profile_picture; 


-- feedback
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100),
    rating INT DEFAULT 0,
    feedback TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


-- appointment  (currently not being used) under maintainance)
CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time VARCHAR(50) NOT NULL,
    reason TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
