<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250514103255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            INSERT INTO qcode (id, code, description, additional_data) VALUES
            (1, "QAZ", "Burza, wyłączam stację", NULL),
            (2, "QHL", "Przeszukiwanie pasma od największej częstotliwości", NULL),
            (3, "QHM", "Przeszukiwanie pasma od największej do środkowej częstotliwości", NULL),
            (4, "QLH", "Przeszukiwanie pasma od najmniejszej częstotliwości", NULL),
            (5, "QLM", "Przeszukiwanie pasma od najmniejszej do środkowej częstotliwości", NULL),
            (6, "QMH", "Przeszukiwanie pasma od środkowej do największej częstotliwości", NULL),
            (7, "QML", "Przeszukiwanie pasma od środkowej do najmniejszej częstotliwości", NULL),
            (8, "QQQ", "Muszę przerwać łączność, wyjaśnienia później", NULL),
            (9, "QRA", "Moja stacja nazywa się...", NULL),
            (10, "QRAR", "Mój adres w callbooku jest dokładny i prawidłowy", NULL),
            (11, "QRB", "Odległość między naszymi stacjami wynosi ... km", NULL),
            (12, "QRD", "Zdążamy do... z...", NULL),
            (13, "QRE", "Przypuszczalnie przybędziemy do ... o ... godzinie", NULL),
            (14, "QRF", "Wracamy (wracajcie) do ... (miejsce)", NULL),
            (15, "QRG", "Twoja częstotliwość wynosi...", NULL),
            (16, "QRH", "Twoja częstotliwość zmienia się, waha", NULL),
            (17, "QRI", "Twój ton jest: 1. dobry, 2. zmienny, 3. zły", NULL),
            (18, "QRJ", "Wasze sygnały są bardzo słabe, nieodbieralne", NULL),
            (19, "QRK", "Czytelność waszych sygnałów wynosi (1...5)", NULL),
            (20, "QRL", "Jestem zajęty, proszę nie przeszkadzać", NULL),
            (21, "QRM", "Mam przeszkody w odbiorze, zakłócenia od innych stacji", NULL),
            (22, "QRN", "Mam zakłócenia atmosferyczne", NULL),
            (23, "QRO", "Zwiększ moc, duża moc", NULL),
            (24, "QRP", "Zmniejsz moc, mała moc", NULL),
            (25, "QRQ", "Nadawaj szybciej", NULL),
            (26, "QRR", "Jestem gotowy do pracy automatycznej", NULL),
            (27, "QRRR", "Znak niebezpieczeństwa na lądzie (tylko w ruchu amatorskim)", NULL),
            (28, "QRS", "Nadawaj wolniej", NULL),
            (29, "QRT", "Kończę nadawanie, wyłączam stację, przerwij nadawanie!", NULL),
            (30, "QRU", "Nie mam nic dla ciebie", NULL),
            (31, "QRV", "Jestem gotów do pracy", NULL),
            (32, "QRW", "Przekażcie ..., że go wołam na częstotliwości ...", NULL),
            (33, "QRX", "Proszę poczekać, zawołam was o godzinie ...", NULL),
            (34, "QRY", "Wasza kolejność jest...", NULL),
            (35, "QRZ", "Was woła..., kto mnie woła?", NULL),
            (36, "QSA", "Siła waszych sygnałów wynosi (1...9)", NULL),
            (37, "QSB", "Siła waszego sygnału waha się", NULL),
            (38, "QSD", "Błędnie nadajecie CW", NULL),
            (39, "QSI", "Nie mogłem przerwać waszego nadawania", NULL),
            (40, "QSK", "Mogę słuchać w przerwach nadawania (BK)", NULL),
            (41, "QSL", "Potwierdzam, przyślę kartę QSL", NULL),
            (42, "QSLL", "Wymieńmy wzajemnie nasze karty QSL", NULL),
            (43, "QSLN", "Nie trzeba wysyłać karty QSL", NULL),
            (44, "QSM", "Proszę powtórzyć (RPT)", NULL),
            (45, "QSN", "Słuszałem was na ... kHz", NULL),
            (46, "QSO", "Łączność, mam połączenie", NULL),
            (47, "QSP", "Przekażcie komunikat do...", NULL),
            (48, "QSQ", "Nadawajcie każde słowo jeden raz", NULL),
            (49, "QSR", "Powtórzcie wasze wywołanie na częstotliwości wywoławczej", NULL),
            (50, "QSS", "Chcemy używać częstotliwości roboczej ...", NULL),
            (51, "QST", "Komunikat dla wszystkich", NULL),
            (52, "QSU", "Nadawajcie na częstotliwości ... kHz", NULL),
            (53, "QSUF", "Proszę o łączność telefoniczną przewodową", NULL),
            (54, "QSV", "Nadawajcie V dla strojenia", NULL),
            (55, "QSW", "Przechodzę na częstotliwość...", NULL),
            (56, "QSX", "Słucham na częstotliwości...", NULL),
            (57, "QSY", "Przejdźcie na częstotliwość...", NULL),
            (58, "QSZ", "Nadawajcie każde słowo dwa razy (lub ... razy)", NULL),
            (59, "QTA", "Anulujcie radiogram nr... , jak gdyby nie był nadany", NULL),
            (60, "QTB", "Nie zgadzam się z waszym obliczeniem ilości słów", NULL),
            (61, "QTC", "Mam dla was wiadomość", NULL),
            (62, "QTG", "Będziemy nadawali po naszym znaku dwie \'kreski\', każda po 10 sek.", NULL),
            (63, "QTH", "Moje położenie geograficzne to...", NULL),
            (64, "QTN", "Opuściliśmy to miejsce o ... godzinie", NULL),
            (65, "QTR", "Dokładny czas jest...", NULL),
            (66, "QTS", "Będziemy nadawali do pomiarów nasz sygnał wywoławczy przez ... minut", NULL),
            (67, "QTT", "Sygnał rozpoznawczy który nastąpi jest nałożony na inną transmisję", NULL),
            (68, "QTU", "Pracuję od ... do ...", NULL),
            (69, "QTV", "Nasłuchujcie za nas na częstotliwości ... ( od ... do ... godziny)", NULL),
            (70, "QTX", "Będziemy w pogotowiu do dalszej łączności z wami", NULL),
            (71, "QUA", "Przekazuję wiadomość od ...", NULL),
            (72, "QUB", "Oto żądane wiadomości ...", NULL),
            (73, "QUH", "Ciśnienie barometryczne wynosi ...", NULL),
            (74, "QUM", "Mogę już podjąć normalną pracę", NULL),
            (75, "QWX", "Stan pogody", NULL)
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DELETE FROM qcode WHERE id BETWEEN 1 AND 75
        SQL);
    }
}
