CREATE DATABASE IF NOT EXISTS travel_db;
USE travel_db;

CREATE TABLE IF NOT EXISTS enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    message TEXT,
    destination VARCHAR(100),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
USE travel_db;
CREATE TABLE destination_content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(100) UNIQUE,
    intro TEXT,
    highlights TEXT
);

INSERT INTO destination_content (destination, intro, highlights)
VALUES 
('japan', 
'Japan is a captivating country where ancient traditions coexist with cutting-edge innovation. Travelers are drawn to its timeless temples, peaceful tea ceremonies, futuristic cities, and vibrant pop culture. Whether you’re walking through the sacred torii gates of Kyoto, marveling at Mount Fuji’s majestic presence, or enjoying street food in Osaka, every moment in Japan is unforgettable. The country offers a perfect mix of serenity and excitement, ideal for solo travelers, couples, and families alike.', 
'Explore the bustling streets of Tokyo where modern skyscrapers meet ancient shrines like Meiji Jingu. Marvel at panoramic views from Tokyo Skytree and experience digital art at teamLab Planets. In Kyoto, walk through the red gates of Fushimi Inari Shrine and the Arashiyama Bamboo Grove. Feed deer at Nara Park and visit Todai-ji Temple. Don’t miss Osaka’s Dotonbori district and winter escapes in Hokkaido for hot springs and the Sapporo Snow Festival.'),

('france', 
'France is a timeless destination that embodies elegance, romance, and cultural richness. From the romantic streets of Paris to the sun-kissed shores of the French Riviera, every region offers a unique experience. The country is famous for its exquisite cuisine, world-class museums, historic landmarks, and scenic countryside. Whether you’re sipping coffee in a Parisian café, exploring medieval castles in the Loire Valley, or relaxing along the Mediterranean coast, France will leave you enchanted with its charm and beauty.', 
'Start in Paris with the Eiffel Tower and Louvre Museum. Wander Montmartre and cruise the Seine River. Visit the Palace of Versailles and gardens. Head to the French Riviera — beaches, azure waters, nightlife in Nice and Cannes. See Mont Saint-Michel and end in the Loire Valley with castles and wine.'),

('egypt', 
'Egypt is a land of awe-inspiring history and cultural treasures. Known for its ancient civilization and iconic monuments, it continues to captivate travelers with its majestic pyramids, sprawling deserts, and the timeless Nile River. From the bustling markets of Cairo to the temples of Luxor, every corner of Egypt offers a window into humanity’s early grandeur. Visitors can experience both adventure and relaxation, whether cruising down the Nile, exploring tombs in the Valley of the Kings, or diving in the Red Sea.',
'Visit the Great Pyramids of Giza and the Sphinx. Explore the Egyptian Museum in Cairo. Cruise the Nile from Luxor to Aswan. Discover temples like Karnak and Abu Simbel. Relax in Sharm El Sheikh or dive in the Red Sea for underwater wonders.')

ON DUPLICATE KEY UPDATE
    intro = VALUES(intro),
    highlights = VALUES(highlights);

    INSERT INTO destination_content (destination, intro, highlights)
VALUES 
('italy',
'Italy is a cultural feast, blending ancient ruins with Renaissance art, sun-soaked coastlines, and gastronomic delights. From the ruins of Rome to the canals of Venice, every city feels like a living museum.',
'Rome Colosseum, Venice Canals, Florence Duomo, Leaning Tower of Pisa, Amalfi Coast, Vatican City.'),

('thailand',
'Thailand is known for its lush jungles, serene beaches, vibrant cities, and friendly locals. Whether exploring Bangkok’s temples or relaxing on Phuket’s beaches, it offers a rich tapestry of experiences.',
'Bangkok Grand Palace, Chiang Mai Temples, Phi Phi Islands, Phuket Beaches, Floating Markets, Ayutthaya.'),

('greece',
'Greece is the birthplace of Western civilization, with iconic ruins and blue-domed island villages. From the Acropolis to the Aegean, it’s perfect for lovers of history and beauty.',
'Acropolis of Athens, Santorini Sunsets, Mykonos Town, Delphi Ruins, Meteora, Crete Beaches.'),

('australia',
'Australia offers diverse natural wonders — from coral reefs to deserts to rainforests. Adventure seekers and wildlife lovers are equally drawn to its relaxed coastal lifestyle.',
'Sydney Opera House, Great Barrier Reef, Uluru, Gold Coast, Kangaroo Island, Blue Mountains.'),

('brazil',
'Brazil is a land of rhythm, color, and exuberance. From Carnival in Rio to the Amazon rainforest, it’s a destination full of life and energy.',
'Christ the Redeemer, Copacabana Beach, Iguazu Falls, Amazon River, Salvador, Pantanal Wildlife.')

ON DUPLICATE KEY UPDATE
    intro = VALUES(intro),
    highlights = VALUES(highlights);

USE travel_db;
INSERT INTO destination_content (destination, intro, highlights)
VALUES 
('italy',
'Italy is a cultural feast, blending ancient ruins with Renaissance art, sun-soaked coastlines, and gastronomic delights. From the ruins of Rome to the canals of Venice, every city feels like a living museum.',
'Rome Colosseum, Venice Canals, Florence Duomo, Leaning Tower of Pisa, Amalfi Coast, Vatican City.'),

('thailand',
'Thailand is known for its lush jungles, serene beaches, vibrant cities, and friendly locals. Whether exploring Bangkok’s temples or relaxing on Phuket’s beaches, it offers a rich tapestry of experiences.',
'Bangkok Grand Palace, Chiang Mai Temples, Phi Phi Islands, Phuket Beaches, Floating Markets, Ayutthaya.'),

('greece',
'Greece is the birthplace of Western civilization, with iconic ruins and blue-domed island villages. From the Acropolis to the Aegean, it’s perfect for lovers of history and beauty.',
'Acropolis of Athens, Santorini Sunsets, Mykonos Town, Delphi Ruins, Meteora, Crete Beaches.'),

('australia',
'Australia offers diverse natural wonders — from coral reefs to deserts to rainforests. Adventure seekers and wildlife lovers are equally drawn to its relaxed coastal lifestyle.',
'Sydney Opera House, Great Barrier Reef, Uluru, Gold Coast, Kangaroo Island, Blue Mountains.'),

('brazil',
'Brazil is a land of rhythm, color, and exuberance. From Carnival in Rio to the Amazon rainforest, it’s a destination full of life and energy.',
'Christ the Redeemer, Copacabana Beach, Iguazu Falls, Amazon River, Salvador, Pantanal Wildlife.')

ON DUPLICATE KEY UPDATE
    intro = VALUES(intro),
    highlights = VALUES(highlights);