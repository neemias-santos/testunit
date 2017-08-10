CREATE TABLE 'design' (
  'design_id'     INT(11)      NOT NULL,
  'design_name'   VARCHAR(255) NOT NULL,
  'split_percent' INT(11)      NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

INSERT INTO design (design_name, split_percent) VALUE ('Design 1', '50');
INSERT INTO design (design_name, split_percent) VALUE ('Design 2', '25');
INSERT INTO design (design_name, split_percent) VALUE ('Design 3', '25');