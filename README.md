# RCS Subaquática — Site Institucional

Site institucional da **RCS Subaquática**, empresa especializada em inspeção subaquática, salvatagem e serviços correlatos.

## Estrutura do Projeto

```
site/
├── index.html              # Página principal
├── quemsomos.html          # Página "Quem Somos"
├── servicos.html           # Página de Serviços
├── trabalhos.html          # Página de Trabalhos
├── sucesso.html            # Página de confirmação de formulário
├── style.css               # Estilos globais
├── estiloservicos.css      # Estilos da página de serviços
├── interação/
│   └── script.js           # Scripts de interação (slideshow, mapa)
└── img/                    # Imagens e ícones
```

## Como Contribuir

### Pré-requisitos

- [Git](https://git-scm.com/) instalado na máquina

### Fluxo de trabalho

1. **Clone o repositório**
   ```bash
   git clone https://github.com/RCSSUBAQUATICA/site.git
   cd site
   ```

2. **Atualize o repositório local com as últimas alterações do remoto**
   ```bash
   git pull origin main
   ```

3. **Crie uma branch para sua alteração**
   ```bash
   git checkout -b minha-feature
   ```

4. **Faça as alterações desejadas** nos arquivos HTML, CSS ou JS.

5. **Adicione os arquivos modificados ao stage**
   ```bash
   git add .
   ```

6. **Faça o commit das alterações**
   ```bash
   git commit -m "Descrição clara da alteração"
   ```

7. **Envie a branch para o repositório remoto**
   ```bash
   git push origin minha-feature
   ```

8. Abra um **Pull Request** no GitHub para revisão.

## Tecnologias Utilizadas

- HTML5
- CSS3
- JavaScript (Vanilla)
- [Google Fonts — Poppins](https://fonts.google.com/specimen/Poppins)
- Google Maps API
