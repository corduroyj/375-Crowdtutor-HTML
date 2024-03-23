-- Insert test data into UserAccount table
INSERT INTO UserAccount (name, phoneNum, password, email, userActive, wantLongTerm, learnerCount, currentHours, currentSessions, searchConsider)
VALUES 
    ('User1', '1234567890', 'password1', 'user1@example.com', 1, 1, 0, 0, 0, 1),
    ('User2', '1234567891', 'password2', 'user2@example.com', 1, 1, 0, 0, 0, 1),
    ('User3', '1234567892', 'password3', 'user3@example.com', 1, 1, 0, 0, 0, 1),
    ('User4', '1234567893', 'password4', 'user4@example.com', 1, 1, 0, 0, 0, 1);

-- Insert test data into LearnerPreference table
INSERT INTO LearnerPreference (learnerID, tutorGender, knowledgeLevel, prefOnline)
VALUES 
    (1, 'Male', 8, 1),
    (2, 'Female', 7, 0),
    (3, 'Any', 6, 1),
    (4, 'Male', 9, 1);

-- Insert test data into TutorPreference table
INSERT INTO TutorPreference (tutorID, learnerGender, maxLearners, maxSessions)
VALUES 
    (1, 'Female', 5, 10),
    (2, 'Male', 4, 8),
    (3, 'Any', 3, 6),
    (4, 'Female', 6, 12);

-- Insert test data into AvailableTimeslot table
INSERT INTO AvailableTimeslot (timeslotUserID, startTime, timeslotLength, repeatFlag)
VALUES 
    (1, '2024-03-22 08:00:00', 60, 1),
    (2, '2024-03-22 09:00:00', 90, 0),
    (3, '2024-03-22 10:00:00', 120, 1),
    (4, '2024-03-22 11:00:00', 60, 0);

-- Insert test data into UserBlock table
INSERT INTO UserBlock (userID, blockUserID)
VALUES 
    (1, 2),
    (2, 3),
    (3, 4),
    (4, 1);

-- Insert test data into Course table
INSERT INTO Course (courseName, courseDepartment)
VALUES 
    ('Mathematics', 'Math'),
    ('Physics', 'Science'),
    ('English Literature', 'Language'),
    ('History', 'Social Studies');

-- Insert test data into UserCourse table
INSERT INTO UserCourse (userID, courseID, courseKnowledge)
VALUES 
    (1, 1, 8),
    (2, 2, 7),
    (3, 3, 6),
    (4, 4, 9);

-- Insert test data into TutoringSession table
INSERT INTO TutoringSession (learnerID, tutorID, courseID, startTime, sessionLength)
VALUES 
    (1, 2, 1, '2024-03-22 08:00:00', 2),
    (2, 3, 2, '2024-03-22 09:00:00', 1.5),
    (3, 4, 3, '2024-03-22 10:00:00', 2),
    (4, 1, 4, '2024-03-22 11:00:00', 1);
