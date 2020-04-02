DROP DATABASE IF EXISTS stationery_shopping;

CREATE DATABASE stationery_shopping character set utf8mb4 collate utf8mb4_unicode_ci;

USE stationery_shopping;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    name NVARCHAR(255) NOT NULL,
    email NVARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(255),
    password NVARCHAR(255) NOT NULL,
    role INT NOT NULL DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO users (name, email, phone, password, role)
VALUES  ('admin', 'admin@gmail.com', '0123456789','$2y$10$v8dYo7NI01y2Tp7Awn3ksOFLnn.TvhVRLah6xxP/27Tri20WfAwtS', 0),
        ('user1', 'user1@gmail.com', '0122098473','$2y$10$v8dYo7NI01y2Tp7Awn3ksOFLnn.TvhVRLah6xxP/27Tri20WfAwtS', 1),
        ('user2', 'user2@gmail.com', '0333678412','$2y$10$v8dYo7NI01y2Tp7Awn3ksOFLnn.TvhVRLah6xxP/27Tri20WfAwtS', 1);

CREATE TABLE categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(255) not null,
    slug NVARCHAR(255),
    parent_id INT DEFAULT 0,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO categories (name, slug, parent_id)
VALUES  ('Office equipment', 'office-equipment', 0),
        ('Paper', 'paper', 0),
        ('Folder', 'folder', 0),
        ('Pen', 'pen', 0),
        ('Booklet', 'booklet', 0),
        ('Storage', 'storage', 0),
        ('Device', 'device', 0),
        ('Utilities', 'utilities', 0),
        ('Ink - Ruban', 'ink-ruban', 0),
        ('Stapler', 'stapler', 1),
        ('Punches', 'punches', 1),
        ('Cutlery', 'cutlery', 1),
        ('Paper clips - Binding of books', 'paper-clips-binding-of-books', 1),
        ('Tape - Cut the glue', 'tape-cut-the-glue', 1),
        ('Glue', 'glue', 1),
        ('Ruler - Compa', 'ruler-compa', 1),
        ('Fastener', 'fastener', 1),
        ('Stamped - Tampon', 'stamped-tampon', 1),
        ('Printing paper', 'printing-paper', 2),
        ('Fax paper - continuous', 'fax-paper-continuous', 2),
        ('Paper notes', 'paper-notes', 2),
        ('Specialized paper', 'specialized-paper', 2),
        ('Paper towels - Toilet paper', 'paper-towels-toilet-paper', 2),
        ('Cover cuffs', 'cover-cuffs', 3),
        ('Cover storage', 'cover-storage', 3),
        ('Page cover', 'page-cover', 3),
        ('Album cover', 'album-cover', 3),
        ('Ball-point pen - Gel', 'ball-point-pen-gel', 4),
        ('Pencil', 'pencil', 4),
        ('Brush - Highlighter', 'brush-highlighter', 4),
        ('Specialized pen', 'specialized-pen', 4),
        ('Fountain Pens', 'fountain-pens', 4),
        ('Pen accessories', 'pen-accessories', 4),
        ('Exercise book', 'exercise-book', 5),
        ('Coupon - Form', 'coupon-form', 5),
        ('Tray shelf', 'tray-shelf', 6),
        ('Pen holder', 'pen-holder', 6),
        ('Storage tools', 'storage-tools', 6),
        ('Brochure Tray - Menu', 'brochure-tray-menu', 6),
        ('Envelope', 'envelope', 6),
        ('Table name', 'table-name', 6),
        ('Frames', 'frames', 6),
        ('CD - DVD - USB', 'cd-dvd-usb', 7),
        ('Keyboard - Mouse', 'keyboard-mouse', 7),
        ('The battery', 'the-battery', 7),
        ('Computer', 'computer', 7),
        ('Tools - VP machine', 'tools-vp-machine', 7),
        ('Electrical equipment', 'electrical-equipment', 7),
        ('Board', 'board', 7),
        ('DC sanitary', 'dc-sanitary', 8),
        ('Cleaning fluid', 'cleaning-fluid', 8),
        ('Appliances', 'appliances', 8),
        ('Food', 'food', 8),
        ('Medicine', 'medicine', 8),
        ('Personal gadgets', 'personal-gadgets', 8),
        ('Printer ink', 'printer-ink', 9),
        ('Ruban - Film Fax', 'ruban-film-fax', 9);



CREATE TABLE suppliers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(255) not null,
    logo NVARCHAR(255),
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO suppliers (name, logo)
VALUES  ('Philips', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-philips.jpg'),
        ('Casio', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-casio.jpg'),
        ('Epson', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-epson.jpg'),
        ('KW-triO', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-kw-trio.jpg'),
        ('Logitech', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-logitech.jpg'),
        ('Marco', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-marco.jpg'),
        ('Parker', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-parker.jpg'),
        ('Pentel', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/logo-pentel.jpg');

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(255) not null,
    slug NVARCHAR(255),
    image NVARCHAR(255),
    description TEXT,
    short_description TEXT,
    sell_price INT NOT NULL,
    category_id INT NOT NULL,
    sub_category_id INT,
    supplier_id INT NOT NULL,
    FOREIGN KEY (category_id)
	REFERENCES categories(id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (supplier_id)
	REFERENCES suppliers(id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    status INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO products (name, slug, image, description, short_description, sell_price, category_id, sub_category_id, supplier_id)
VALUES ('Double Hole Puncher - 30 Pages', 'double-hole-puncher-30-pages', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/bam_lo_978-768x768.jpg', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- Stainless steel body, pushing shape, perforated 2 holes, rim alignment size paper, rubber soles anti-slip, press 30 sheets, superior quality Vietnam
- Function: press 2 holes documents, vouchers
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- Stainless steel body, pushing shape, perforated 2 holes, rim alignment size paper, rubber soles anti-slip, press 30 sheets, superior quality Vietnam
- Function: press 2 holes documents, vouchers',90000, 1, 11,2),
('Heavy Duty Stapler - 210 Pages', 'heavy-duty-stapler-210-pages', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/bk-50la-768x768.jpg', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- Stainless steel body, push format, press 210 sheets, superior quality Vietnam
- Function: store documents and vouchers, bookbinding
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- Stainless steel body, push format, press 210 sheets, superior quality Vietnam
- Function: store documents and vouchers, bookbinding', 350000, 1, 10,7),
('Paper Cutting Machine - A3', 'paper-cutting-machine-a3', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/ban-cat-giay-a3-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- 297mm x 420mm, the blade steel, wood surfaces, anti-skid rubber feet, background glass reticle
- Function: Cut paper, vouchers, documents, records
- To meet health standards office users
- Made in: Vietnam
- Specifications: 1 pcs/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set', '- Products are manufactured by companies stationery prestige in Vietnam
- 297mm x 420mm, the blade steel, wood surfaces, anti-skid rubber feet, background glass reticle
- Function: Cut paper, vouchers, documents, records', 210000, 1, 12,7),
('Scotch Magic Tape', 'scotch-magic-tape', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/scotch-magic-810-invisible-tape-19mm-x-33m-768x768.png', '- Products are manufactured by companies stationery prestige in Vietnam
- Background in, pasted one hand, reduce the reflective, waterproof, high adhesion
- Function: paste money, documents, and invoices
- To meet health standards office users
- Made in: USA
- Specification: 12 rolls/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Scroll', '- Products are manufactured by companies stationery prestige in Vietnam
- Background in, pasted one hand, reduce the reflective, waterproof, high adhesion
- Function: paste money, documents, and invoices', 45000, 1, 15, 4),
('Technical Compa', 'technical-compa', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/DraftingCompass-768x768.jpg', '- SDI is the stationery brand reputation in Taiwan in the field of manufacturing of machinery stapler, staples, knives, broaching lead
- Body stainless steel cover, grip the pencil tray
- Function: create circle, curve technique
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- SDI is the stationery brand reputation in Taiwan in the field of manufacturing of machinery stapler, staples, knives, broaching lead
- Body stainless steel cover, grip the pencil tray
- Function: create circle, curve technique', 50000, 1, 17, 2),
('Large Rope', 'large-rope', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/rope-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Radius large wire, natural fiber, superior quality Vietnam
- Function: packing, reinforced and raised pull heavy items
- To meet health standards office users
- Made in: Vietnam
- Specification: 10 - 50 m/roll
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Meters', '- Products are manufactured by companies stationery prestige in Vietnam
- Radius large wire, natural fiber, superior quality Vietnam
- Function: packing, reinforced and raised pull heavy items', 8000, 1, 18, 8),
('Colored Thumbtacks', 'colored -thumbtacks', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/jumbo-push-pins-100-count-colorful-clear-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Nails press, body plastic, metal head pin, head pin Iron, multicolor
- Function: pin vouchers, documents, records or soft wood surface velvet table
- To meet health standards office users
- Made in: Vietnam
- Specification: 20 - 50 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: box (30 pieces)', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Nails press, body plastic, metal head pin, head pin Iron, multicolor
- Function: pin vouchers, documents, records or soft wood surface velvet table', 10000, 1, 14, 2),
('10-Digit Numerical Numbering Machine', '10-digit-umerical-numbering-machine', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Deli-7510-768x768.jpg', '- Deli stationery brand reputation in Taiwan in the field of manufacturing all kinds of seals, cartridge seals, tampon
- Close 10 number, stem stainless steel cover, integrated tampon, automatically generated number, customized easily
- Function: create continuous sequence numbers
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box', '- Deli stationery brand reputation in Taiwan in the field of manufacturing all kinds of seals, cartridge seals, tampon
- Close 10 number, stem stainless steel cover, integrated tampon, automatically generated number, customized easily
- Function: create continuous sequence numbers', 800000, 1, 19, 4),
('Glue Stick', 'glue-stick', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/YP003-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Type of pipe fitting lid, dry glue, high viscosity, mild aroma, natural materials
- Function: paste envelopes, labels or stamps
- To meet health standards office users
- Made in: USA
- Specification: 24 tubes/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Pipes', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Type of pipe fitting lid, dry glue, high viscosity, mild aroma, natural materials
- Function: paste envelopes, labels or stamps', 140000, 1, 16, 5),
('Heavy Duty Staples 23/23', 'heavy-duty-staples-23-23', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/kb-23-23-768x768.jpg', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- The body of iron, metal legs height: 23mm, press 190 sheets
- Function: use with machines of the same type
- To meet health standards office users
- Made in: Taiwan
- Specification: 1000 pins/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box (1000 pin)', '- Kw trio brand stationery reputation in Taiwan in the field of manufacturing of machinery stapler, punch, stapler office
- The body of iron, metal legs height: 23mm, press 190 sheets
- Function: use with machines of the same type', 30000, 1, 13,5),
('POS Thermal Receipt Paper', 'pos-thermal-receipt-paper', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/POS-Paper-receipt-bond-thermo-paper-roll-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Multiple sizes of white paper, induction heating
- Function: use with the revenue models in Vietnam
- To meet health standards office users
- Made in: Japan
- Specification: 20-50 meters/roll
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Roll (30m)', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Multiple sizes of white paper, induction heating
- Function: use with the revenue models in Vietnam', 8000, 2, 21, 6),
('Idea A4 Paper', 'idea-a4-paper', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/idea-a4-768x768.jpg', '- Idea brand stationery prestige in Thailand in the field of manufacturing all kinds of copier paper, paperboard
- Dimensions: A4 (210mm x 297mm), quantitative: 80gms, white paper
- Function: high-end printing vouchers, contracts, design, art
- To meet health standards office users
- Made in: Thailand
- Specification: 400-500 sheets/ream
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Ream', '- Idea brand stationery prestige in Thailand in the field of manufacturing all kinds of copier paper, paperboard
- Dimensions: A4 (210mm x 297mm), quantitative: 80gms, white paper
- Function: high-end printing vouchers, contracts, design, art', 75000, 2, 20, 2),
('Fibre Silk Paper', 'fibre-silk-paper', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/giay-lua-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- 0.5 x 0.8 m, ribbed silk background colors and modern forms
- Function: package design, including notebooks, decorations
- To meet health standards office users
- Made in: Taiwan
- Specification: 10 sheet/stack
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: sheet', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- 0.5 x 0.8 m, ribbed silk background colors and modern forms
- Function: package design, including notebooks, decorations', 5000, 2, 23, 5),
('Sign Here Paper Notes', 'sign-here-paper-notes', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Message-Flag-with-Dispenser-768x768.jpg', '- 3M is a trademark stationery Mapeduy credit in the United States, the United States in the field of manufacturing all kinds of notepaper notes, glue, tape
- 1 "x 1.7", with adhesive layer, background
- Function: create signs sign
- To meet health standards office users
- Made in: USA
- Specification: 12 stack/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: sheaf (50 sheets)', '- 3M is a trademark stationery Mapeduy credit in the United States, the United States in the field of manufacturing all kinds of notepaper notes, glue, tape
- 1 "x 1.7", with adhesive layer, background
- Function: create signs sign', 70000, 2, 22, 8),
('Pulppy Tissue', 'pulppy-tissue', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/8339a2117dc1707076a4e42cad823dfa-768x768.jpg', '- Pulppy stationery brand reputation in Thailand in the field of manufacturing all kinds of toilet paper, paper towels
- 19cm x 19cm, 100% pure pulp, soft white paper, border pattern, scent, 150 sheets x 2 classes
- Function: Dedicated personal hygiene, hygroscopic office
- To meet health standards office users
- Made in: Vietnam
- Specification: 5 boxes/cyclone
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box (150 sheets x 2 layers)', '- Pulppy stationery brand reputation in Thailand in the field of manufacturing all kinds of toilet paper, paper towels
- 19cm x 19cm, 100% pure pulp, soft white paper, border pattern, scent, 150 sheets x 2 classes
- Function: Dedicated personal hygiene, hygroscopic office', 22000, 2, 24, 3),
('King Jim 10F Lever Arch File', 'king-jim-10f-lever-arch-file', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/bia-cong-10f-768x768.jpg', "- King Jim's stationery brand reputation in Japan in the field of manufacturing all kinds of binder
- width 10 cm, body wrap Vinyl, community, capable of storing 500 sheets
- Function: store vouchers A4 with 2 holes along the body
- To meet health standards office users
- Made in: Japan
- Specification: 50 pcs/barrel
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc", "- King Jim's stationery brand reputation in Japan in the field of manufacturing all kinds of binder
- width 10 cm, body wrap Vinyl, community, capable of storing 500 sheets
- Function: store vouchers A4 with 2 holes along the body", 85000, 3, 25, 6),
('A4-Simili-File', 'a4-simili-file', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/display-books-a4-40-pockets-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Cover simili leather, plastic pane, the ability to store 80 sheets
- Function: store vouchers A4, A5
- To meet health standards office users
- Made in: Taiwan
- Specification: 12 Roll/barrel
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Bench', '- Products are manufactured by companies stationery prestige in Vietnam
- Cover simili leather, plastic pane, the ability to store 80 sheets
- Function: store vouchers A4, A5', 72000, 3, 27, 1),
('Plastic File Devider', 'plastic-file-devider', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/phan-trang-10-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- In plastic cover, along body punches, showing numerical order (1-10)
- Function: clustering document content, use binder with records
- To meet health standards office users
- Made in: Vietnam
- Specification: 5 sets/bag
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set (10 sheets)', '- Products are manufactured by companies stationery prestige in Vietnam
- In plastic cover, along body punches, showing numerical order (1-10)
- Function: clustering document content, use binder with records', 10000, 3, 27, 7),
('Cutting Pads', 'cutting-pads', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/master_ALV226-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Surface sure, anti-slip, contour measurement, fit the paper size A2, A3, A4
- Function: Makes cutting paper coasters
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Plates', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Surface sure, anti-slip, contour measurement, fit the paper size A2, A3, A4
- Function: Makes cutting paper coasters', 150000, 3, 26, 3),
('Macro Sketching Pencil', 'macro-sketching-pencil', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/pencil-marco-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Smooth brush, pencil sure, high contrast, natural woody
- Function: Lead record, forged letters, art drawing, sketch
- To meet health standards office users
- Made in: Taiwan
- Specification: 12 plants/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc (12km/Box)', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Smooth brush, pencil sure, high contrast, natural woody
- Function: Lead record, forged letters, art drawing, sketch', 72000, 4, 29, 8),
('Parker Pen', 'parker-pen', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/but-ky-parker-768x768.jpg', '- Parker is brand stationery Mapeduy credit in the United States, the United States in the field of manufacturing various kinds of pens and accessories
- Stroke smooth evenly green, metal body, forms a lid
- Function: content conference notes
- To meet health standards office users
- Made in: UK
- Specification: 12 plants/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Parker is brand stationery Mapeduy credit in the United States, the United States in the field of manufacturing various kinds of pens and accessories
- Stroke smooth evenly green, metal body, forms a lid
- Function: content conference notes', 480000, 4, 28, 4),
('Pentel Maxiflo Whiteboard Marker', 'pentel-maxiflo-whiteboard-marker', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/but-da-quang-768x768.jpg', '- Pentel stationery brand reputation in Japan in the field of manufacturing various kinds of pens and accessories
- Ink panel, buttons ink pump, ink width, drying
- Function: use bookmarks, notes on the surface indelibly
- To meet health standards office users
- Made in: Japan
- Specification: 12 plants/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Pentel stationery brand reputation in Japan in the field of manufacturing various kinds of pens and accessories
- Ink panel, buttons ink pump, ink width, drying
- Function: use bookmarks, notes on the surface indelibly', 35000, 4, 30, 6),
('Sharpie Stained Fabric Marker', 'sharpie-stained-fabric-marker', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/stained-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Quickly absorbent fabric surface, drying, natural materials
- Function: Design, Decorative cloth
- To meet health standards office users
- Made in: Taiwan
- Specification: 12 plants/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Quickly absorbent fabric surface, drying, natural materials
- Function: Design, Decorative cloth', 100000, 4, 31, 2),
('Guangbo Superman Pencil Sharpener', 'guangbo-superman-pencil-sharpener', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/got-but-chi-768x768.jpg', '- Material safe, durable
- Sharpener Guangbo XBQ9745A plastic material is made of solid, durable, does not contain harmful ingredients affect health, especially for children, so you absolutely can rest assured when using long long. Besides, the plastic material also has a high gl
- Funny designs, cute
- Products are designed with cute images, lovely combined with vivid colors, striking make you feel more interested and excited to use. Guangbo XBQ9745A pencil sharpener with compact size, you can carry for use anytime need without taking up too much area
- Sharpener pencil quick, convenient
- With this product, you can safely use without fear of blunt by broaching sharp blade provides the ability to quickly trim without breaking pen. You also do not need to hold the pen body to rotate just fatigue or slippery hands just because the product i
- Unit: pc', '- Material safe, durable
- Sharpener Guangbo XBQ9745A plastic material is made of solid, durable, does not contain harmful ingredients affect health, especially for children, so you absolutely can rest assured when using long long. Besides, the plastic material also has a high gl
- Funny designs, cute', 45000, 4, 33, 2),
('Montblanc Legrand Pen Gut', 'montblanc-legrand-pen-gut', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/montblanc-rollerball-mozart-refill-768x768.jpg', '- Montblanc brand stationery reputation in Germany in the field of manufacturing various kinds of pens and accessories
- Ballpoint, ink luxury background, beautifully smooth strokes, stroke nib metastable
- Function: Montblanc pen for the Legrand
- To meet health standards office users
- Made in: Germany
- Specification: 1-2 trees/blister
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Montblanc brand stationery reputation in Germany in the field of manufacturing various kinds of pens and accessories
- Ballpoint, ink luxury background, beautifully smooth strokes, stroke nib metastable
- Function: Montblanc pen for the Legrand', 280000, 4, 32, 7),
('Office Calendar', 'office-calendar', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/calendar-cute-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Dimensions 15 x 24cm, displayed by month, 2-sided printing, the sole letter A
- Function: Lookup calendar, notes fast
- To meet health standards office users
- Made in: Vietnam
- Specification: 1 sheet/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set', '- Products are manufactured by companies stationery prestige in Vietnam
- Dimensions 15 x 24cm, displayed by month, 2-sided printing, the sole letter A
- Function: Lookup calendar, notes fast', 40000, 5, 35, 2),
('Leather Notebook', 'leather-notebook', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/small-notebook-companion-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- 100 pages, leather cover, white lined paper background, natural materials
- Function: Office notes content
- To meet health standards office users
- Made in: Vietnam
- Specification: 12 Roll/cyclone
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Bench', '- Products are manufactured by companies stationery prestige in Vietnam
- 100 pages, leather cover, white lined paper background, natural materials
- Function: Office notes content', 35000, 5, 34, 3),
('Leather Name Badge Holders', 'leather-name-badge-holders', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/bang-ten-doc-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Material leather with hook holes, border color, vertical format, showing one face
- Function: display personal information used in connection with strap nameplate
- To meet health standards office users
- Made in: Vietnam
- Specification: 12 pcs/cyclone
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Material leather with hook holes, border color, vertical format, showing one face
- Function: display personal information used in connection with strap nameplate', 15000, 6, 41, 6),
('Winding envelopes A4', 'Winding-envelopes-A4', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Cheap-Kraft-Brown-Paper-Bags-A4-A5-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Envelope A4, quantitative: 80gms, background yellow paper, the cover along, accompanied winding width 5F, capable of storing 100 sheets
- Function: store small parcels, documents A4
- To meet health standards office users
- Made in: Vietnam
- Specification: 100 pcs/bag
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: sheaf (50 pcs)', '- Products are manufactured by companies stationery prestige in Vietnam
- Envelope A4, quantitative: 80gms, background yellow paper, the cover along, accompanied winding width 5F, capable of storing 100 sheets
- Function: store small parcels, documents A4', 5000, 6, 40, 4),
('Holder Basket', 'holder-basket', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/hop-but-luoi-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Body stainless steel cover, rounded, 1 compartment
- Function: Storage butterfly clip, paperclips, stapler, office accessories
- To meet health standards office users
- Made in: Thailand
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Body stainless steel cover, rounded, 1 compartment
- Function: Storage butterfly clip, paperclips, stapler, office accessories', 30000, 6, 37, 7),
('Deli 200 Pieces/Barrel Paper Clips', 'deli-200-pieces-barel-paper-clips', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Desk-Organizer-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Boxes of paper pinned rounded, plastic body, the head mounted magnets, 1 compartment
- Function: store paperclips, stapler, office accessories
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Boxes of paper pinned rounded, plastic body, the head mounted magnets, 1 compartment
- Function: store paperclips, stapler, office accessories', 25000, 6, 38, 5),
('3-Layer Plastic Desk Organizer File Tray', '3-layer-plastic-desk-organizer-file-tray', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Desk-Tray-768x768.jpg', '- Xukiva stationery brand reputation in Vietnam in the field of manufacturing all kinds of pencil cases, file tray, cover storage, office equipment
- Shelf records, 3 compartment, plastic, removable simple storage capacity of 1,200 sheets
- Function: store office documents A4, F4
- To meet health standards office users
- Made in: Vietnam
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set', '- Xukiva stationery brand reputation in Vietnam in the field of manufacturing all kinds of pencil cases, file tray, cover storage, office equipment
- Shelf records, 3 compartment, plastic, removable simple storage capacity of 1,200 sheets
- Function: store office documents A4, F4', 170000, 6, 36, 4),
('Painting Stand Wooden Easel', 'painting-stand-wooden-easel', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/easel-stand-wood-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Woody, outriggers, size options (1.4m, 1.7m)
- Function: sustains framing
- To meet health standards office users
- Made in: Vietnam
- Specifications: 1 pcs/bag
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Xukiva stationery brand reputation in Vietnam in the field of manufacturing all kinds of pencil cases, file tray, cover storage, office equipment
- Shelf records, 3 compartment, plastic, removable simple storage capacity of 1,200 sheets
- Function: store office documents A4, F4', 180000, 6, 42, 3),
('Acrylic Sign Holder', 'acrylic-sign-holder', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/sign-holder-768x768.jpg', '- Xukiva stationery brand reputation in Vietnam in the field of manufacturing all kinds of pencil cases, file tray, cover storage, office equipment
- Frame menu, mica, show 2 sides
- Function: displays a visa for residence applications, menus, advertisements
- To meet health standards office users
- Made in: Vietnam
- Specifications: 1 pcs/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Xukiva stationery brand reputation in Vietnam in the field of manufacturing all kinds of pencil cases, file tray, cover storage, office equipment
- Frame menu, mica, show 2 sides
- Function: displays a visa for residence applications, menus, advertisements', 35000, 6, 39, 1),
('Chalkboard Easel Stand', 'chalkboard-easel-stand', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/bang-phan-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- 0.8m x 1.2m, wood, the table in grid, hangers, tray for chalk
- Function: message content notes, conferences, presentations
- To meet health standards office users
- Made in: Vietnam
- Specification: 1 sheet/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Plates', '- Products are manufactured by companies stationery prestige in Vietnam
- 0.8m x 1.2m, wood, the table in grid, hangers, tray for chalk
- Function: message content notes, conferences, presentations', 240000, 7, 49, 2),
('Lightbulb', 'lightbulb', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Cool-White-LED-G50-Designer-Lamp-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- filament bulb, light yellow, 60W
- Function: luminous office
- To meet health standards office users
- Made in: Vietnam
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Products are manufactured by companies stationery prestige in Vietnam
- filament bulb, light yellow, 60W
- Function: luminous office', 32000, 7, 48, 1),
('Logitech Wireless Mouse MX Master 2S', 'logitech-wireless-mouse-mx-master-2s', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/chuot-khong-day-logitech-mx-master-2s-768x768.jpg', '- Logitech Wireless Mouse MX Master 2S.
- Connect 3 devices simultaneously via Bluetooth or Unifying receiver/4,000 dpi/rechargeable via Micro-USB battery life up to 70 days/sensor Darkfield Works on any surface/software FLOW likely share are Text, picture and files between two computer
- Warranty 1 year standard manufacturer.
- Unit: pc', '- Logitech Wireless Mouse MX Master 2S.
- Connect 3 devices simultaneously via Bluetooth or Unifying receiver/4,000 dpi/rechargeable via Micro-USB battery life up to 70 days/sensor Darkfield Works on any surface/software FLOW likely share are Text, picture and files between two computer
- Warranty 1 year standard manufacturer.', 2480000, 7, 44, 3),
('Philips DVD+R DL', 'philips-dvd+r-dl', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Philips-DR8I8B25F-DVDDoblecapa-768x768.jpg', '- Philips Electronics is brand reputation in France in the field of manufacturing all kinds of CD, DVD, data storage devices
- 4.2GB capacity, delete data record 1
- Function: Data Storage Computer
- To meet health standards office users
- Made in: France
- Specification: 10 - 50 pcs/cyclone
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: 10 pcs/cyclone', '- Philips Electronics is brand reputation in France in the field of manufacturing all kinds of CD, DVD, data storage devices
- 4.2GB capacity, delete data record 1
- Function: Data Storage Computer', 75000, 7, 43, 5),
('Digital Handheld Tally Counter', 'digital-handheld-tally-counter', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/may-dem-so-768x768.jpg', '- Suremark stationery brand reputation in Singapore in the field of manufacturing all kinds of cover hole, cut glue, knives, scissors
- metal body, press the hand press, superior quality Vietnam
- Function: Count the number of order
- To meet health standards office users
- Made in: Singapore
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Suremark stationery brand reputation in Singapore in the field of manufacturing all kinds of cover hole, cut glue, knives, scissors
- metal body, press the hand press, superior quality Vietnam
- Function: Count the number of order', 80000, 7, 47, 4),
('AX-12B Casio Calculator', 'ax-12b-casio-calculator', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/casio-AX-12B-768x768.jpg', '- The calculation will become simpler and faster with feature-rich PC. Basic desktop Casio AX-12B is a new model of Casio to replace the old model as AX-12S, owns compact and convenient, serving many different computing needs. Featured functions such as percentage, calculated to raise prices, exchange rates ... to help you quickly complete the work required to the calculation with short steps and most accurate.
- extra large display makes reading much easier data. Display 12 digits crisp, clear.
- Source bidirectional (Solar + Battery) mode using solar energy when enough light is turned on, the battery mode is enabled when there is enough light.
- Press the keys simultaneously.
- The keystrokes are stored in cache, so the data will not be lost even if imported at high speed.
- The enduring soft rubber keys for you to work quickly and with more flexibility.
- You can calculate the percentage of ordinary calculations.
- All the features of the community to increase prices for the calculation of the cost and profit is simplified.
- Unit: pc', '- The calculation will become simpler and faster with feature-rich PC. Basic desktop Casio AX-12B is a new model of Casio to replace the old model as AX-12S, owns compact and convenient, serving many different computing needs. Featured functions such as percentage, calculated to raise prices, exchange rates ... to help you quickly complete the work required to the calculation with short steps and most accurate.
- extra large display makes reading much easier data. Display 12 digits crisp, clear.
- Source bidirectional (Solar + Battery) mode using solar energy when enough light is turned on, the battery mode is enabled when there is enough light.', 250000, 7, 46, 3),
('AA Energizer Battery', 'aa-energizer-battery', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/pin-aa-768x768.jpg', '- Energizer brand stationery prestige in Singapore in the field of manufacturing all kinds of batteries
- 1.5V, while using high safety for users
- Function: Load energy for electronic devices
- To meet health standards office users
- Made in: Singapore
- Specification: 2 tablets/blister
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box (2 capsules)', '- Energizer brand stationery prestige in Singapore in the field of manufacturing all kinds of batteries
- 1.5V, while using high safety for users
- Function: Load energy for electronic devices', 17000, 7, 45, 4),
('Sirocco Electra Feather Duster', 'sirocco-electra-feather-duster', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/choi-long-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Body long, plastic coat, superior quality Vietnam
- Function: sanitary and household dusting
- To meet health standards office users
- Made in: Vietnam
- Specification: 1 tree/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: pc', '- Products are manufactured by companies stationery prestige in Vietnam
- Body long, plastic coat, superior quality Vietnam
- Function: sanitary and household dusting', 35000, 8, 50, 8),
('Eagle Brand Medicated Oil', 'eagle-brand-medicated-oil', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/dau-xanh-eagle-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- In glass bottle cap up, refer to the user manual before use
- Function: analgesics, massage, warm body temperature
- To meet health standards office users
- Made in: Singapore
- Specification: 1 bottle/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Bottle', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- In glass bottle cap up, refer to the user manual before use
- Function: analgesics, massage, warm body temperature', 25000, 8, 54, 4),
('Sugar', 'sugar', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/merigrocery-chini-sugar-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- white sugar, refined sugar, natural materials
- Function: beverage dispensing office, coffee, juice
- To meet health standards office users
- Made in: Vietnam
- Specification: 500 - 1000 grams/bag
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Pack (1 Kg)', '- Products are manufactured by companies stationery prestige in Vietnam
- white sugar, refined sugar, natural materials
- Function: beverage dispensing office, coffee, juice', 25000, 8, 53, 5),
('Compass', 'compass', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/silva-expedition-s-compass-768x768.jpg', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Body metal shell with a lid, arrow magnet orientation, measuring table
- Function: north east south west orientation
- To meet health standards office users
- Made in: Taiwan
- Specifications: 1 pcs/set
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: set', '- Products by businesses stationery prestige in Asia such as Thailand, Malaysia, China, South Korea production
- Body metal shell with a lid, arrow magnet orientation, measuring table
- Function: north east south west orientation', 150000, 8, 55, 7),
('Strong Plastic Magnetic Hook', 'strong-plastic-magnetic-hook', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/moc-hit-768x768.jpg', '- Products are manufactured by companies stationery prestige in Vietnam
- Body plastic, iron hooks, high grip, lifting capacity of 1 kg
- Function: Versatile racks widgets on the glass surface
- To meet health standards office users
- Made in: Vietnam
- Specification: 3-5 pcs/blister
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box', '- Products are manufactured by companies stationery prestige in Vietnam
- Body plastic, iron hooks, high grip, lifting capacity of 1 kg
- Function: Versatile racks widgets on the glass surface', 18000, 8, 52, 2),
('CIF Kitchen Cleaning Water 520ml', 'cif-kitchen-cleaning-water-520ml', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/cif-lau-bep-768x768.jpg', "- Clean grease lightning. CIF's unique formula helps remove stains effectively cling, grease and stain food, bounce looks clean and shiny for your kitchen.
- Ingredients: Decylamine oxide, sodium hydroxide, silicone, perfume, water
- Unit: Bottle", "- Clean grease lightning. CIF's unique formula helps remove stains effectively cling, grease and stain food, bounce looks clean and shiny for your kitchen.
- Ingredients: Decylamine oxide, sodium hydroxide, silicone, perfume, water", 30000, 8, 51, 3),
('Epson Ink Cartridge', 'Epson-ink-cartridge', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/muc-in-epson-768x768.jpg', '- Epson brand electronics prestigious office in Japan in the field of manufacturing all kinds of photo paper, printers, ink
- Color ink sharp, honest, high-performance, cost savings
- Function: refill for Epson printers
- To meet health standards office users
- Made in: Japan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box', '- Epson brand electronics prestigious office in Japan in the field of manufacturing all kinds of photo paper, printers, ink
- Color ink sharp, honest, high-performance, cost savings
- Function: refill for Epson printers', 350000, 9, 56, 5),
('Panasonic Ruban FA136', 'panasonic-ruban-fa136', 'http://mauweb.monamedia.net/officexinh/wp-content/uploads/2018/06/Panasonic-FA136-768x768.jpg', '- Panasonic brand electronics prestigious office in Japan in the field of manufacturing all kinds of photo paper, printers, ink
- Color ink sharp, honest, high-performance, cost savings
- Function: Provide ink for dot matrix printer genuine Panasonic
- To meet health standards office users
- Made in: Japan
- Specifications: 1 pcs/box
- Save more when buying group
- The promotion only applies to online orders
- Free Shipping on orders worth
- Design and product information may vary according to the policy makers
- Unit: Box', '- Panasonic brand electronics prestigious office in Japan in the field of manufacturing all kinds of photo paper, printers, ink
- Color ink sharp, honest, high-performance, cost savings
- Function: Provide ink for dot matrix printer genuine Panasonic', 170000, 9, 57, 1);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT ,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id)
	REFERENCES users(id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    status INT DEFAULT 0,
    address NVARCHAR(255) not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO orders (user_id, status, address)
VALUES  (2, 1, '123 Nguyen Hue Street'),
        (3, 1, '456 Nguyen Thi Minh Khai Street');

CREATE TABLE order_product (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (order_id)
	REFERENCES orders(id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (product_id)
	REFERENCES products(id)
	ON UPDATE CASCADE ON DELETE CASCADE,
    product_quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

INSERT INTO order_product (order_id, product_id, product_quantity)
VALUES  (1, 1, 1),
        (1, 10, 100),
        (1, 2, 1),
        (2, 2, 2);
