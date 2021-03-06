  import { Link } from 'react-router-dom'     
    
    import illustrationImg from '../assets/images/illustration.svg'
    import LogoImg from '../assets/images/logo.svg';
    import GoogleIconImg from '../assets/images/google-icon.svg';
    
    import {Button} from '../components/Button';   

    import '../styles/auth.scss';

    export function NewRoom() {
      return(
        <div id="page-auth">
          <aside>
            <img src={illustrationImg} alt="Ilustração simbolizando troca de perguntas e respostas" />
            <strong>Crie salas de Q&amp; A ao-vivo</strong>
            <p>Tire as duvidas da sua audiência em tempo-real</p>
          </aside>
          <main>
            <div className="main-content">
              <img src={LogoImg} alt="Letmeask"/>
              <h2>Criar uma nova sala</h2>
              <form>
                <input 
                type="text" 
                placeholder="Nome da sala"
                />
                <Button type="submit">
                  Criar sala
                </Button>
              </form>
              <p>
                Quer entrar em uma sala existente?<Link to="/">clique aqui</Link>
              </p>
            </div>
          </main>
        </div>
      )
   }