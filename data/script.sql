
-- Insérer des données dans la table agence
INSERT INTO agence (numero, adresse) VALUES
('A001', '123 Rue Galandou Diouf, Dakar'),
('A002', '456 Avenue Bourguiba, Castors'),
('A003', '789 Boulevard Ahmadou Bamba, Dakar');

-- Insérer des données dans la table profil
INSERT INTO profil (libp) VALUES
('Respo Guichet'),
('Chargé Client'),
('Client');

-- Insérer des données dans la table typecpt
INSERT INTO typecpt (libtc) VALUES
('Compte Courant'),
('Compte Épargne'),
('Compte Entreprise');

-- Insérer des données dans la table recu
INSERT INTO recu (reference, type, dater, montant) VALUES
('REF001', 'Dépôt', '2024-01-15', 1000.00),
('REF002', 'Retrait', '2024-02-20', 200.00),
('REF003', 'Transfert', '2024-03-10', 500.00);

-- Insérer des données dans la table users
INSERT INTO users (nom, prenom, telephone, email, pwd, justificatif, idp) VALUES
('Sarr', 'Modou', '772536985', 'modousarr@gmail.com', 'passer', '', 1),
('Diop', 'Mbéne', '7718566910', 'mbenediop@gmail.com', 'passer', '', 2),
('Diallo', 'Jamy', '789853045', 'jamydiallo@gmail.com', 'passer', 'Justificatif 1', 3),
('Ba', 'Amadou', '776057430', 'amadouba@gmail.com', 'passer', 'Justificatif 2', 3),
('Diatta', 'Issa', '761046921', 'issadiatta@gmail.com', 'passer', 'Justificatif 3', 3);

-- Insérer des données dans la table demande
INSERT INTO demande (dated,statut, idtc, idu) VALUES
('2024-01-01', "En cours", 1, 3),
('2024-01-15', "Transférée", 2, 4),
('2024-02-01', "Créée", 3, 5);

-- Insérer des données dans la table compte
INSERT INTO compte (numero, solde, dateCrea, taux, frais, etat, ida, idu, idtc, idd) VALUES
('CPT001', 1000.00, '2024-01-01', 0.5, 5.00, 'Actif', 1, 3, 1, 1),
('CPT002', 2000.00, '2024-01-15', 1.0, 3.00, 'Actif', 2, 4, 2, 2),
('CPT003', 5000.00, '2024-02-01', 1.5, 10.00, 'Inactif', 3, 5, 3, 3);

-- Insérer des données dans la table transaction
INSERT INTO transaction (datetr, montant, type, idu, idc) VALUES
('2024-01-15', 1000.00, 'Dépôt', 3, 1),
('2024-02-20', 200.00, 'Retrait', 4, 2),
('2024-03-10', 500.00, 'Transfert', 5, 3);

-- Insérer des données dans la table transrecu
INSERT INTO transrecu (idr, idtr) VALUES
(1, 1),
(2, 2),
(3, 3);

-- Insérer des données dans la table comptrecu
INSERT INTO comptrecu (idr, idc) VALUES
(1, 1),
(2, 2),
(3, 3);

-- Insérer des données dans la table images
INSERT INTO images (id_img, nom_img) VALUES
(1, "")