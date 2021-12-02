INSERT INTO director (ID, NAME)
VALUES (1, '��������� �����'),
       (2, '�� ������'),
       (3, '������ �����'),
       (4, '��� ����'),
       (5, '������ ������'),
       (6, '����� ��������'),
       (7, '������ ��������'),
       (8, '������� ���������'),
       (9, '����� �������'),
       (10, '��� ������'),
       (11, '����� �����'),
       (12, '������ ������'),
       (13, '��� ������'),
       (14, '������ �������'),
       (15, '������ �����'),
       (16, '���� ���'),
       (17, '��� �����'),
       (18, '������ ����'),
       (19, '��� ����������'),
       (20, '���-���� �����'),
       (21, '���� ������'),
       (22, '������ ����'),
       (23, '����� �������'),
       (24, '������ ��������'),
       (25, '����� ������'),
       (26, '����� ������');


INSERT INTO actor (ID, NAME)
VALUES (1, '������ ���������'),
       (2, '��� �������'),
       (3, '�������� �������'),
       (4, '������ ��������'),
       (5, '����� ������ �������'),
       (6, '��������� �����'),
       (7, '�������� ��������'),
       (8, '������ ������-������'),
       (9, '������ �����'),
       (10, '��� �����'),
       (11, '������� �����'),
       (12, '���� ��'),
       (13, '����� ������'),
       (14, '����� �������'),
       (15, '����� ������'),
       (16, '��.�. �������'),
       (17, '����� ���������'),
       (18, '��������� ���'),
       (19, '����� ����'),
       (20, '����� �����'),
       (21, '������ ����'),
       (22, '������� �����'),
       (23, '������ ������'),
       (24, '��� ���������'),
       (25, '������ ��������'),
       (26, '���� ������'),
       (27, '������ �. �������'),
       (28, '��� ���'),
       (29, '��� �����'),
       (30, '������ ����'),
       (31, '������ ��������'),
       (32, '������ �����'),
       (33, '���� ������'),
       (34, '��������� ������'),
       (35, '������� �������'),
       (36, '����� �������'),
       (37, '��� ����������'),
       (38, '�������� ����'),
       (39, '���� ������'),
       (40, '������ ����� ��.'),
       (41, '���� ��������'),
       (42, '���� �������'),
       (43, '����� ����'),
       (44, '������� ������'),
       (45, '����� Ը��'),
       (46, '������� ���'),
       (47, '���� �����'),
       (48, '��� �������'),
       (49, '���� �������'),
       (50, '������ �����'),
       (51, '������ ���'),
       (52, '����� �������'),
       (53, '��������� ������'),
       (54, '���� �����'),
       (55, '����� �����'),
       (56, '����� �������'),
       (57, '����� ����'),
       (58, '������ �����'),
       (59, '��� �� �����'),
       (60, '���� �����'),
       (61, '���� ������'),
       (62, '����� ������'),
       (63, '������ ������'),
       (64, '��� ������'),
       (65, '�������� ����'),
       (66, '��� ������ ������');

INSERT INTO movie (ID, TITLE, ORIGINAL_TITLE, DESCRIPTION, DURATION, AGE_RESTRICTION, RELEASE_DATE, RATING, DIRECTOR_ID)
VALUES (1, '������������', 'Interstellar', '����� ������, ������� ���� � ��������� �������� �������� ������������ � ������������������ �������, ��������� �������������� � ������ ������������ ������ ����������� (������� ���������������� ��������� ������� ������������-������� ����� ������� ����������) � �����������, ����� ��������� ������� ����������� ��� ����������� ����������� �������� � ����� ������� � ����������� ��� ������������ ���������.', 169, 16, 2014, 8.6, 1),
       (2, '����� ����', 'Coco', '12-������ ������ ���� � ������������ ��������� � ����� ���������� � ����� ������� ����� ����������. �����, ������ ��� � ��� ����� ������ ��������� ����������. �����-�� ��� ��������� ������� ����, ����������� ������, ���� �����, ������� ������ �� ��� �������� ���� � ��� �����������. � ��� ��� ����������� ���� � ����� ����� ����. ������ ������������, ��� ����� ��� � ��� ������� ������ ������� �� �� ������, ���� ��������, ���������� ����� �����. ������� ������������ � ������ ������ � ������ ̸�����, ��� ��������� ���� �������. ������ ���������� ��� � �����-�������� �� ����� ������, ������� ���������� ��� �����������. ����� ��� ������������ �� ������ �� �� �����.', 105, 12, 2017, 8.6, 2),
       (3, '������', 'Inception', '���� � ����������� ���, ������ �� ������ � ������� ��������� ����������: �� ������ ������ ������� �� ������ ����������� �� ����� ���, ����� ������������ ����� �������� ������. ������ ����������� ����� ������� ��� ������ ������� � ��������� � ������������� ���� ������������� ��������, �� ��� �� ���������� ��� � ��������� ������� � ������ �����, ��� �� �����-���� �����.', 148, 12, 2010, 8.7, 1),
       (4, '1+1', 'Intouchables', '��������� � ���������� ����������� ������, ������� ���������� ������ �������� � ��������� ��������, ������� ����� ����� �������� ��� ���� ������, � �������� ������ ���������� ������, ������ ��� ��������������� �� ������. �������� �� ��, ��� ������ �������� � ����������� ������, ������ ������� ��������� � ����������� ����� ����������� ��� �����������.', 112, 16, 2011, 8.8, 3),
       (5, '�����������', 'The Gentlemen', '���� ����� ���������� ��� �� ������������ ��� ������������� �����������, � ������ �������� ����� ������������ ���������� � �������������� �������� ���������� ���������� ������������ � ����� ������� �� ���� ����������. ������ ����������� ��������� �������� � ���, ������ ���� ����������, � ���������� ���� ������ ������������, � ������� �������� ������� ������������ ��� ����� ��� ������� ������ �������������� ����������� ������������� ���� � ��������-�����, ��������� ��������, ���������� ����������� � ���� �������� ��������', 113, 18, 2019, 8.5, 4),
       (6, '�����������', 'Whiplash', '����� ������� ����� �������. �������� ��, ���-��� ��� ����� ������������. ����� �������� ��������� �����, ������� ������� � ������ ��������. ������� ����� �������� ������ ������ ���������� ������������, � ������������ ��������� ���������� ������������ ��� ��� ������ � ������ � �� ������� ������������ ������������. ��� ������ ����������� �� ���� �������?', 106, 16, 2013, 8.3, 5),
       (7, '������� �����', 'Green Book', '1960-� ����. ����� �������� ���-��������� ������� ����� �� ������ �������� ���� �� �������� ������ ���� ���������� �� ���� �������. ��� ��� � ��� ����� ��� ����� � ���������� �������� ���, ������� � ����������� ���������� ��������, ����������� ������������ ������ � ���������� � ����� �� ����� ������, ��� ��� ������ ���������� ��������� � ����� ����������. �� �������� ���� � �������� ��������, ������������� � ��������, ���������� ������ ������� ��������. � ���� ����� ��� ���� ������, � ��� ������� �������� ������� ����� �����.', 130, 16, 2018, 8.4, 6),
       (8, '���� � ����-�����', 'The Wolf of Wall Street', '1987 ���. ������� ������� ���������� �������� � �������� �������������� �����. ������ ���� ����������� ����� ���������� ������ ������� ���-������. �� ������ ���� ������ ������� ������������ � ��������� ���������, ������������ ������� �������. ��� ����������� ����� ������� � ��������� � ��������� ������� ������ ��� ���� �����. �� ���������� � ������� �� ���� �����, ���������, ������� ����� ������� ����� ���� � ��������� � ������ ������� � ��� ����������� �����. � �������� ����������� ��� �������� ���������� ������ ��������, ��� ���� ����� � �������� �������� ��������� �������. � ��������� �� ������ ����� ������� ��������� �����: �������� �� ����� ��������� � ������, �������� � ����������� ��������� � �������������, ����������� ��������� ������������� ����������, � ��� ����� ������ � �������. ������� ��������� ������, ����� ������� ����������� �������� �������� �������������� ����� ���', 180, 18, 2013, 7.9, 7),
       (9, '������ �������������', 'Django Unchained', '������������� ������� �� ��������, ����� ��������� ��� �������, ���������� ��������� ����� ������� ������������. ��������� �������, � ��� ��������� ��������� ��� �� ��������. �� ��� ����� ������ � ���������� �� ����� ��������? ������������ �� ��� �� ����� ������ � ���������� �����������. ������, � ������ ��������� ���� ������ � ��� � ��� ���� ������ �����������.', 165, 18, 2012, 8.2, 8),
       (10, '������: ��������� �����������', 'The Hobbit: An Unexpected Journey', '������ ������ ������� ��������� � ����������� �����, ����� �������� �������� ���������� ����������� ����������� ������ ������ � ������� ������. ���������� ���������� � �������� ���������� ������� ��������� �������� �����. ��� ������ ������� ���� � �������������� � �������� ���������� ������, ������������� ����������� ������ ������� ���������. �� ����������� ������ ����� ����� ����, ������������� �����, ���������� ��������� � ������, ������������� �������, ����������� �������, �������� ����� ������� � ������������.', 169, 6, 2012, 8.1, 9),
       (11, '������������� ���������', 'The Hateful Eight', '��� ����� ����������� �����. ����������� ������� �� �������� ���� ��� �� ������ �������� ���������� �����������. �� ���� � ��� ����������� ��� ��������� ����������������. ������� ���� ��������� �������� ������ ������� � ����� �� ������, ��� ��� ������������� ������ ������� ��������: ������� ������������, ����������, ������ � ���� �� ��� - �� ���, �� ���� ���� ������.', 187, 18, 2015, 7.9, 8),
       (12, '�����������', 'Inside Out', '����� � ������� 11-������ ���������, �, ��� � ������� �� ���, �� ��������� ���������� ���� ������� ������: �������, ������, �����, ���� � ������������. ������ ����� � �������� ������� � ������ ���� �������� �� ����������� � ����������, �������� ����� �� ����������. �� ���� �� ������� ������ ����� ������, �� ����� �����������, ��� ����� � �� ��������� ��������� ������� �� ���������� ������� ������� � ������ � ������ ���������. ������ �� ������ �������, ��� ������ ��� ����� ������ �����, ��� ����� ������ � ���� ��������� ��������, � � ������ � ������� ��������� ������ �����������. ����� �������� ����� � ������� ������, ��������� � ����� ����� � ����������� � ���������������, ������� ����� ��������� ����� ��������� �������� ������.', 95, 6, 2015, 8.0, 10),
       (13, '����� ������ � ���� ������: ����� II', 'Harry Potter and the Deathly Hallows: Part 2', '� ����������� ��������� ����� ����� ����� ������� � ����� ������ ���� ����������� ����������� �� �������� �����. ������ ��� ������� �� ���� ��� ������, � ����� ������� � ����� ������. � ���� ����� ������ ����� ������� �������� ������������ ���� � ��������� �������� � �����-��-������. �������� �� ��� ����� ������ ���? � �� ���������� �����.', 130, 12, 2011, 8.1, 11),
       (14, '����������', 'Zootopia', '����� ���������� � ���������� � ����������� �����, ���������� ������ ������� ���������, �� �������� ������ �� ��������� �����. ���������� �������� �� ������, ��������� ����������� ������������ ����� �������� ������ ������� � ����� ���� � ������� ����� ������� ������ � ������������� ����������. � ���� ������ ���������� ����� ������ �������, �������������� ������� ����� �����, ������� � ������ ���� ������ ��������, ��� ������ ���� ��������� � �������� ����� ������� � ������� �����������. ����� ��������� �� ������ �� ����������� �������� ����, �������� �� ��, ��� �� ��������� ����� ��������� ������ ��� ��� �����. ������ �� ��������� �������� ������� ����, �� �������� ����� �������� ������ ���� ���������� �����������.', 108, 6, 2016, 8.3, 12),
       (15, '�� ������������ �������', 'Hacksaw Ridge', '����� ������������ ����� ����� ������ ������� ����� ������� ����, ������� ������ �� ����� ����� �� �������, ������������ ������� ����� � ���������� ������ ������� ���������� � ������������ �������, ����������� ������ ������.', 139, 18, 2016, 8.0, 13),
       (16, 'Ford ������ Ferrari', 'Ford v Ferrari', '� ������ 1960-� ����� ���� II ��������� ������� �������� ����� �������� � ������� ���� �� ������������ ����� ������ �����������. ����� ����������� ������� ������ ����������� �������� Ferrari ���������� ������ ������� ����� ����������� ����������� �� ������ � �������� ���������� ����� 24 ���� ��-����. ����� ������� ���������� ������, �������� �������� ���������������� ������� �����, � ��� ������������ �������� ��� �����������, ��, ��� ���������, �������� � ������� ������� ���� ������. ������ ��� ����������� �� ���������� ������������ ����������� ��������� Ford GT40.', 152, 16, 2019, 8.2, 14),
       (17, '��������: ����� �������������', 'Avengers: Infinity War', '���� �������� � �� �������� ���������� �������� ��� �� ��������� ����������, � �������� �� ���� �� ���������� ���� ����������, ����� ������ ��������� �� �������: �����. ���������������� ����� ���������� ���� ������� ��� ����� ������ ������������� - ��������� ����������� ����, � ������� ������� ����� ������ ���������� �� ������ �������. ��, � ��� �������� ������������ �����, ���� � ����� ������� � ������ ����� ������� ��� �� ���� ����� �������������.', 149, 16, 2018, 7.9, 15),
       (18, '����� ����', 'Song of the Sea', '����������� ������� ���� � ��� ��������� �����. ������ ��� ��������� � �������������� ����������� ������ ���������� ��� ����� � ������� ������.', 93, 6, 2014, 8.1, 16),
       (19, '������: ������� ������', 'The Hobbit: The Desolation of Smaug', '����������� ����������� ������� ������ ��������, ���������� ��������� � 13 �������� ������. �� �������� ������ ��������� �� �������� ����. � ��� ��� ���������� � ���������� ���������� �� ���� � ��������� ���� ����� ���������, ��� ��� �� ������� ����������, ���������, ������� �������� �� ��������� �� ������ �� ��������, �� �������� �� ������ � ������������ ���������� ����, � �������� �������.', 161, 12, 2013, 8.0, 9),
       (20, '������ �������!', 'The Kings Speech', '����� ����� ��������� � �������, ������� ��������� �������� � ��������� ����������� ������ ������ VI, ���� �������� �������� ��������� II. ����� ����, ��� ��� ���� ���������� �� ��������, ����� �������� ����������� �� ����. ���������� �������� ������� ��������� � ���������� � ����� ������������ ���������� �������, ����� ���������� �� ������� � ����������������� �������� �� ����� ������� ���.', 118, 16, 2010, 8.0, 17),
       (21, '������ ���������', 'Guardians of the Galaxy', '��������� ��������������� ������ ������ �������� � ���� ������������ ��������, ������������� ��������������� � ������������� ������ ������, ��������� �������� ����� �� ������� ���������. ����� ����������� � ������ ���������������� �����, ��� ������ � �� ���. ������������ ������ ������ ���� ����� � ������������ � ��������� ��������� ������: ������������ ������ �� ������ ������, ���������������� ������� ������, ���������� ������� ������� � ��������� ������ ����� �������, ����� ��������� ��� �����������. ����� ����� ��������, ����� ����� �������� ���������� �������� � ����� ��������� �� ������������ ��� ���������, �������� ������ �� ���, ����� �������� ��������� ��������� ��� �������� ����� �� ������ ���������.', 121, 12, 2014, 7.8, 18),
       (22, '�������-����: ����� ���������', 'Spider-Man: Into the Spider-Verse', '�� �� ����� � ������ �������. �� ���� �����, ��������, � ����� ������ ����� ����� � ������ �� ��� ��� � � ����� ���������. � ��� ���� � ���������� ������ ����������� ���������� ��������� ���� �� ������ ��������� � ������? �������� �� � ��� ���� �������-����? � ��� �� ����� ���������? ������������� � ����, ��� � ������ ��������� ����� ���� ������ ����-����� � ������� �� �������� ��������� ������ ��� ������ � ����� ����������� ������.', 117, 6, 2018, 8.0, 19),
       (23, '������: ����� ���� �������', 'The Hobbit: The Battle of the Five Armies', '����� ����� �� ���������� ������ ������� ������� ������ ������� � �������� ��������� � ��������������, ������������, ��������� ������ � �������� ����, ������ �������, ��� ��� ����������� ����������, ����� �� �������� ���� ������ - ������ ���������, ������� ��� ���������� ������������ ������ ������. ����������� � ������, ����������� �������� ������� ����������� ������, ��������� ��� ����� �������, ��� ������������ ����� � ���� �������� - ������ ���������, ����������� ������ � ��� ������ ���� ������.', 144, 12, 2014, 7.8, 9),
       (24, '���������� ���� �����������', 'Dallas Buyers Club', '�������� ������� ���� �������, ���������� ���������, � �������� � 1985 ���� ���������� ����. ����� ������ ��� ����� 30 ����, �� �� �� ������� ��������� �� �������� ���������� � ����� �������� ���� �����, �������� �������������� ���������, � ����� ������� ���������� ������ �� ������� �� ������ �������.', 118, 18, 2013, 7.9, 20),
       (25, '��������', 'The Help', '������������ ��, �� ����� 1960-� ����. ������ ������-������ ��������� ����������� � ������������ �����, � ������ ������� �������, ��� ������� ������ �� ����������. ��� ������� ����� �������������, ��������� � ������� ���. �� ��� ��������� ������� � ��� �� �������� �������� ����� ������� ���������, ��������� ������� ������� ����� ����� � ��������� �� ����. ������ ������� �� �������� ��� ������ ������, ��� ������������ � ����� ����� ��� ���� �����, ��������� ���������� ����� � ����� ��� ������ �� ���� �� �����, ��� ������ �� ������� ����� ������ ������������� ����.', 146, 12, 2011, 8.2, 21),
       (26, '������ ����� ���', 'En man som heter Ove', '��� - ������� ��������� ������, ��������� ������� ������� ����������. �� ������� � ������ ��� ���� ���������� �� ���� ������ ��� ����������� �������������� ������. � ����� �� ��� ���� ����� �������������� ������� ��������, � ������� ������ � ������ ����� �� ��������. ���� ��� ����� ��. � ���� � � ������ � ���� ������ ��������� �������. ��� � � ������. ��� ������ ����� ����� ��������� ����� ��� ���� �����.', 116, 16, 2015, 8.0, 22),
       (27, '������� ����', 'Knives Out', '�� ��������� ���� ����� ������������ 85-����� ���������� ������ ������������ ������� ������� ������ ��������� ��������� ������� ������. ������ � ����� ������������, �� ������� �� ��������� ���������� ���� �������������� � �������� ������ �����, ����, � ���� ���� ������ ������������� ������� �������� ����� ����. ��� �� ����� �� ������� ������� � ��������� �� ������������ � ����� �� ������������� ������ �������. �� ����� ���� ������� ������������, ����� ������, ��� ��� ������������� ���� ��������� � �������� ������ ���������, �� ����� �������� ��������� ������� � ��������� ���������, ������� ��������� �� ������� ����.', 130, 16, 2019, 8.0, 23),
       (28, '���� �������', 'Only the Brave', '������� � ������� �������� ��� ��������� Granite Mountain Hotshots, ������������� � ������� � ����� �� ����� ������������ ������� � �������.', 134, 16, 2017, 8.0, 24),
       (29, '�����', 'The Judge', '�������� ������� ��������� � ������ ����� �� �������� ������ � �����, ��� ��� ����, ���������� �����, ����������� � ��������. ������� ������ �����������, ����� �������� ������, � ���������� ����� ����� �������������, � �������� ����� �� �������.', 142, 18, 2014, 7.9, 25),
       (30, '�����������', 'Gone Girl', '�� ���� ������ ��� ������������ ��������� ����������� �����, ����� ����� ����������� ������� ��������� ���������. �������� ����� ������ � ����, �����, ������� ���� �������� �������, � ������� ��������� � ���� ������ �� ����������� - ���� �������� ���������� � ��� ������ ���������� ����. � ������, ��� ��� ��������� ���� ���� ������� ���� �� ������ �����������.', 149, 16, 2014, 8.0, 26);

INSERT INTO movie_actor (MOVIE_ID, ACTOR_ID)
VALUES (1, 1), (1, 2), (1, 3),
       (2, 4), (2, 5), (2, 6),
       (3, 7), (3, 8), (3, 9), (3, 10),
       (4, 11), (4, 12),
       (5, 1), (5, 13), (5, 14),
       (6, 15), (6, 16),
       (7, 17), (7, 18),
       (8, 7), (8, 19), (8, 20),
       (9, 21), (9, 22), (9, 7),
       (10, 23), (10, 24), (10, 25),
       (11, 26), (11, 27), (11, 28),
       (12, 29), (12, 30),
       (13, 31), (13, 32), (13, 33),
       (14, 34), (14, 35),
       (15, 36), (15, 37),
       (16, 38), (16, 39),
       (17, 40), (17, 41), (17, 42),
       (18, 43), (18, 44),
       (19, 23), (19, 24), (19, 25),
       (20, 45), (20, 46),
       (21, 47), (21, 48), (21, 49), (21, 50),
       (22, 51), (22, 52),
       (23, 23), (23, 24), (23, 25),
       (24, 1), (24, 53),
       (25, 54), (25, 55),
       (26, 56), (26, 57),
       (27, 58), (27, 59), (27, 60),
       (28, 61), (28, 62),
       (29, 40), (29, 63),
       (30, 64), (30, 65), (30, 66);

INSERT INTO genre (ID, CODE, NAME)
VALUES (1, 'sci-fi', '����������'),
       (2, 'drama', '�����'),
       (3, 'adventure', '�����������'),
       (4, 'animation', '����������'),
       (5, 'fantasy', '�������'),
       (6, 'family', '��������'),
       (7, 'action', '������'),
       (8, 'thriller', '�������'),
       (9, 'comedy', '�������'),
       (10, 'music', '������'),
       (11, 'biography', '���������'),
       (12, 'western', '�������'),
       (13, 'war', '�������'),
       (14, 'sport', '�����'),
       (15, 'history', '�������');

INSERT INTO movie_genre(MOVIE_ID, GENRE_ID)
VALUES (1, 1), (1, 2), (1, 3),
       (2, 4), (2, 5), (2, 3), (2, 6), (2, 10),
       (3, 1), (3, 7), (3, 2),
       (4, 2), (4, 9),
       (5, 9), (5, 7),
       (6, 2), (6, 10),
       (7, 9), (7, 2),
       (8, 2), (8, 11), (8, 9),
       (9, 12), (9, 7), (9, 2), (9, 9),
       (10, 5), (10, 3), (10, 7),
       (11, 12), (11, 8), (11, 2),
       (12, 4), (12, 6), (12, 9),
       (13, 5), (13, 2), (13, 3),
       (14, 4), (14, 9), (14, 6),
       (15, 2), (15, 13), (15, 11),
       (16, 11), (16, 14), (16, 2),
       (17, 1), (17, 7), (17, 3),
       (18, 4), (18, 2), (18, 3), (18, 6),
       (19, 5), (19, 3),
       (20, 2), (20, 11), (20, 15),
       (21, 1), (21, 7), (21, 3),
       (22, 4), (22, 1), (22, 7),
       (23, 5), (23, 3),
       (24, 2), (24, 11),
       (25, 2),
       (26, 2), (26, 9),
       (27, 9), (27, 2),
       (28, 7), (28, 2), (28, 11),
       (29, 2),
       (30, 8), (30, 2);